<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateGlobalTableWitnessGroupMemberAction|null $Create
 * @property DeleteGlobalTableWitnessGroupMemberAction|null $Delete
 */
class GlobalTableWitnessGroupUpdate extends Shape
{
    /**
     * @param array{
     *     Create?: CreateGlobalTableWitnessGroupMemberAction|null,
     *     Delete?: DeleteGlobalTableWitnessGroupMemberAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
