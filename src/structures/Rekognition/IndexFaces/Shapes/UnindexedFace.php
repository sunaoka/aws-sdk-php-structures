<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'EXCEEDS_MAX_FACES'|'EXTREME_POSE'|'LOW_BRIGHTNESS'|'LOW_SHARPNESS'|'LOW_CONFIDENCE'|'SMALL_BOUNDING_BOX'|'LOW_FACE_QUALITY'> $Reasons
 * @property FaceDetail $FaceDetail
 */
class UnindexedFace extends Shape
{
    /**
     * @param array{
     *     Reasons?: list<'EXCEEDS_MAX_FACES'|'EXTREME_POSE'|'LOW_BRIGHTNESS'|'LOW_SHARPNESS'|'LOW_CONFIDENCE'|'SMALL_BOUNDING_BOX'|'LOW_FACE_QUALITY'>,
     *     FaceDetail?: FaceDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
