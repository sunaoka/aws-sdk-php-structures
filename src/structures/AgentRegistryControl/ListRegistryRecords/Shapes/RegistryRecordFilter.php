<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'name'|'status'|'recordType' $name
 * @property list<string> $values
 */
class RegistryRecordFilter extends Shape
{
    /**
     * @param array{
     *     name: 'name'|'status'|'recordType',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
