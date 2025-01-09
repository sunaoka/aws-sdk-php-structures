<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FaceDetail $FaceDetails
 * @property list<'FACE_NOT_LARGEST'|'EXCEEDS_MAX_FACES'|'EXTREME_POSE'|'LOW_BRIGHTNESS'|'LOW_SHARPNESS'|'LOW_CONFIDENCE'|'SMALL_BOUNDING_BOX'|'LOW_FACE_QUALITY'> $Reasons
 */
class UnsearchedFace extends Shape
{
    /**
     * @param array{
     *     FaceDetails?: FaceDetail,
     *     Reasons?: list<'FACE_NOT_LARGEST'|'EXCEEDS_MAX_FACES'|'EXTREME_POSE'|'LOW_BRIGHTNESS'|'LOW_SHARPNESS'|'LOW_CONFIDENCE'|'SMALL_BOUNDING_BOX'|'LOW_FACE_QUALITY'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
