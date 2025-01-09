<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int<0, max>> $PersonsWithRequiredEquipment
 * @property list<int<0, max>> $PersonsWithoutRequiredEquipment
 * @property list<int<0, max>> $PersonsIndeterminate
 */
class ProtectiveEquipmentSummary extends Shape
{
    /**
     * @param array{
     *     PersonsWithRequiredEquipment?: list<int<0, max>>,
     *     PersonsWithoutRequiredEquipment?: list<int<0, max>>,
     *     PersonsIndeterminate?: list<int<0, max>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
