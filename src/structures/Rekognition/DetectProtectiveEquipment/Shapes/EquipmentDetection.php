<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox|null $BoundingBox
 * @property float|null $Confidence
 * @property 'FACE_COVER'|'HAND_COVER'|'HEAD_COVER'|null $Type
 * @property CoversBodyPart|null $CoversBodyPart
 */
class EquipmentDetection extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox|null,
     *     Confidence?: float|null,
     *     Type?: 'FACE_COVER'|'HAND_COVER'|'HEAD_COVER'|null,
     *     CoversBodyPart?: CoversBodyPart|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
