<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\ListDiscoverableRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'recordType'|'descriptorType' $name
 * @property list<string> $values
 */
class RegistryRecordFilter extends Shape
{
    /**
     * @param array{
     *     name: 'recordType'|'descriptorType',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
