import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import {  PanelBody, RangeControl } from '@wordpress/components';
 
import './editor.scss';


const randomPhotos = (count) => {
	const photosArray = [];
	
	for(let i = 0; i < count; i++) {
		photosArray.push(
			<div className="polaroid edit" key={i}>
				<img src={`http://picsum.photos/200/150.webp?random=${i}`} alt=""
					loading="lazy"
				/>
			</div>
		)
	};

	return photosArray;

};


export default function Edit({attributes, setAttributes}) {
	
	const {photos} = attributes;

	return (
		<section { ...useBlockProps() } >
			
			<div className="polaroids"> { randomPhotos( photos ) } </div>
			
			<InspectorControls>        
					<PanelBody>
									<RangeControl
											label="Photos"
											value={ photos }
											onChange={ ( newCount ) => setAttributes( { photos : newCount } ) }
											min={ 3 }
											max={ 40 }
											__nextHasNoMarginBottom
									/>
					</PanelBody>
			</InspectorControls>
			
		</section>
	);
}
