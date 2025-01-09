<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $Image
 * @property list<'DEFAULT'|'ALL'|'AGE_RANGE'|'BEARD'|'EMOTIONS'|'EYE_DIRECTION'|'EYEGLASSES'|'EYES_OPEN'|'GENDER'|'MOUTH_OPEN'|'MUSTACHE'|'FACE_OCCLUDED'|'SMILE'|'SUNGLASSES'> $Attributes
 */
class DetectFacesRequest extends Request
{
    /**
     * @param array{
     *     Image: Shapes\Image,
     *     Attributes?: list<'DEFAULT'|'ALL'|'AGE_RANGE'|'BEARD'|'EMOTIONS'|'EYE_DIRECTION'|'EYEGLASSES'|'EYES_OPEN'|'GENDER'|'MOUTH_OPEN'|'MUSTACHE'|'FACE_OCCLUDED'|'SMILE'|'SUNGLASSES'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
