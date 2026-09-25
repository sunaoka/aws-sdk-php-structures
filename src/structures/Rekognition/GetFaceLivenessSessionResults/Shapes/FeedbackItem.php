<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FACE_NOT_VISIBLE'|'FACE_OBSTRUCTION_DETECTED'|'LOW_VIDEO_QUALITY_DETECTED'|'FACE_NOT_ALIGNED'|'EYES_CLOSED_DETECTED'|'LOW_LIGHTING_DETECTED'|'HIGH_LIGHTING_DETECTED' $Code
 * @property string $Message
 */
class FeedbackItem extends Shape
{
    /**
     * @param array{
     *     Code: 'FACE_NOT_VISIBLE'|'FACE_OBSTRUCTION_DETECTED'|'LOW_VIDEO_QUALITY_DETECTED'|'FACE_NOT_ALIGNED'|'EYES_CLOSED_DETECTED'|'LOW_LIGHTING_DETECTED'|'HIGH_LIGHTING_DETECTED',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
