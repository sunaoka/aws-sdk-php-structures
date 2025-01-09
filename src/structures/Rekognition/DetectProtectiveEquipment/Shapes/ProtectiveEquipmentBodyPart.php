<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FACE'|'HEAD'|'LEFT_HAND'|'RIGHT_HAND' $Name
 * @property float $Confidence
 * @property list<EquipmentDetection> $EquipmentDetections
 */
class ProtectiveEquipmentBodyPart extends Shape
{
    /**
     * @param array{
     *     Name?: 'FACE'|'HEAD'|'LEFT_HAND'|'RIGHT_HAND',
     *     Confidence?: float,
     *     EquipmentDetections?: list<EquipmentDetection>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
