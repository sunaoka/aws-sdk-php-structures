<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox $BoundingBox
 * @property float $Confidence
 * @property 'FACE_COVER'|'HAND_COVER'|'HEAD_COVER' $Type
 * @property CoversBodyPart $CoversBodyPart
 */
class EquipmentDetection extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox,
     *     Confidence?: float,
     *     Type?: 'FACE_COVER'|'HAND_COVER'|'HEAD_COVER',
     *     CoversBodyPart?: CoversBodyPart
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
