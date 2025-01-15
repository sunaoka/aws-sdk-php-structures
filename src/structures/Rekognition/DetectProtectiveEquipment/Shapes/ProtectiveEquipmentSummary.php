<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int<0, max>>|null $PersonsWithRequiredEquipment
 * @property list<int<0, max>>|null $PersonsWithoutRequiredEquipment
 * @property list<int<0, max>>|null $PersonsIndeterminate
 */
class ProtectiveEquipmentSummary extends Shape
{
    /**
     * @param array{
     *     PersonsWithRequiredEquipment?: list<int<0, max>>|null,
     *     PersonsWithoutRequiredEquipment?: list<int<0, max>>|null,
     *     PersonsIndeterminate?: list<int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
