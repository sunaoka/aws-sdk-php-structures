<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property Shapes\Image $Image
 * @property string|null $ExternalImageId
 * @property list<'DEFAULT'|'ALL'|'AGE_RANGE'|'BEARD'|'EMOTIONS'|'EYE_DIRECTION'|'EYEGLASSES'|'EYES_OPEN'|'GENDER'|'MOUTH_OPEN'|'MUSTACHE'|'FACE_OCCLUDED'|'SMILE'|'SUNGLASSES'>|null $DetectionAttributes
 * @property int<1, max>|null $MaxFaces
 * @property 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|null $QualityFilter
 */
class IndexFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     Image: Shapes\Image,
     *     ExternalImageId?: string|null,
     *     DetectionAttributes?: list<'DEFAULT'|'ALL'|'AGE_RANGE'|'BEARD'|'EMOTIONS'|'EYE_DIRECTION'|'EYEGLASSES'|'EYES_OPEN'|'GENDER'|'MOUTH_OPEN'|'MUSTACHE'|'FACE_OCCLUDED'|'SMILE'|'SUNGLASSES'>|null,
     *     MaxFaces?: int<1, max>|null,
     *     QualityFilter?: 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
