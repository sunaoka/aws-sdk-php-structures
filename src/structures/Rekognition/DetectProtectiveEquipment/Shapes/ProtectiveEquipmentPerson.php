<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProtectiveEquipmentBodyPart> $BodyParts
 * @property BoundingBox $BoundingBox
 * @property float $Confidence
 * @property int $Id
 */
class ProtectiveEquipmentPerson extends Shape
{
    /**
     * @param array{
     *     BodyParts?: list<ProtectiveEquipmentBodyPart>,
     *     BoundingBox?: BoundingBox,
     *     Confidence?: float,
     *     Id?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
