<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProtectiveEquipmentBodyPart>|null $BodyParts
 * @property BoundingBox|null $BoundingBox
 * @property float|null $Confidence
 * @property int<0, max>|null $Id
 */
class ProtectiveEquipmentPerson extends Shape
{
    /**
     * @param array{
     *     BodyParts?: list<ProtectiveEquipmentBodyPart>|null,
     *     BoundingBox?: BoundingBox|null,
     *     Confidence?: float|null,
     *     Id?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
