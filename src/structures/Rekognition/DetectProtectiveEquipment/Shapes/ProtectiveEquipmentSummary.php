<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $PersonsWithRequiredEquipment
 * @property list<int> $PersonsWithoutRequiredEquipment
 * @property list<int> $PersonsIndeterminate
 */
class ProtectiveEquipmentSummary extends Shape
{
    /**
     * @param array{
     *     PersonsWithRequiredEquipment?: list<int>,
     *     PersonsWithoutRequiredEquipment?: list<int>,
     *     PersonsIndeterminate?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
