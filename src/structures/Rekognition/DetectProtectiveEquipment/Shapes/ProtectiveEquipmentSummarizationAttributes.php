<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $MinConfidence
 * @property list<'FACE_COVER'|'HAND_COVER'|'HEAD_COVER'> $RequiredEquipmentTypes
 */
class ProtectiveEquipmentSummarizationAttributes extends Shape
{
    /**
     * @param array{
     *     MinConfidence: float,
     *     RequiredEquipmentTypes: list<'FACE_COVER'|'HAND_COVER'|'HEAD_COVER'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
