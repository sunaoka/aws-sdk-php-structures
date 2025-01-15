<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FACE'|'HEAD'|'LEFT_HAND'|'RIGHT_HAND'|null $Name
 * @property float|null $Confidence
 * @property list<EquipmentDetection>|null $EquipmentDetections
 */
class ProtectiveEquipmentBodyPart extends Shape
{
    /**
     * @param array{
     *     Name?: 'FACE'|'HEAD'|'LEFT_HAND'|'RIGHT_HAND'|null,
     *     Confidence?: float|null,
     *     EquipmentDetections?: list<EquipmentDetection>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
