<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property Shapes\Image $Image
 * @property string $ExternalImageId
 * @property list<'DEFAULT'|'ALL'|'AGE_RANGE'|'BEARD'|'EMOTIONS'|'EYE_DIRECTION'|'EYEGLASSES'|'EYES_OPEN'|'GENDER'|'MOUTH_OPEN'|'MUSTACHE'|'FACE_OCCLUDED'|'SMILE'|'SUNGLASSES'> $DetectionAttributes
 * @property int $MaxFaces
 * @property 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH' $QualityFilter
 */
class IndexFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     Image: Shapes\Image,
     *     ExternalImageId?: string,
     *     DetectionAttributes?: list<'DEFAULT'|'ALL'|'AGE_RANGE'|'BEARD'|'EMOTIONS'|'EYE_DIRECTION'|'EYEGLASSES'|'EYES_OPEN'|'GENDER'|'MOUTH_OPEN'|'MUSTACHE'|'FACE_OCCLUDED'|'SMILE'|'SUNGLASSES'>,
     *     MaxFaces?: int,
     *     QualityFilter?: 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
