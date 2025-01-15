<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FaceDetail|null $FaceDetails
 * @property list<'FACE_NOT_LARGEST'|'EXCEEDS_MAX_FACES'|'EXTREME_POSE'|'LOW_BRIGHTNESS'|'LOW_SHARPNESS'|'LOW_CONFIDENCE'|'SMALL_BOUNDING_BOX'|'LOW_FACE_QUALITY'>|null $Reasons
 */
class UnsearchedFace extends Shape
{
    /**
     * @param array{
     *     FaceDetails?: FaceDetail|null,
     *     Reasons?: list<'FACE_NOT_LARGEST'|'EXCEEDS_MAX_FACES'|'EXTREME_POSE'|'LOW_BRIGHTNESS'|'LOW_SHARPNESS'|'LOW_CONFIDENCE'|'SMALL_BOUNDING_BOX'|'LOW_FACE_QUALITY'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
