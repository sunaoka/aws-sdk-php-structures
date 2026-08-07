<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\BatchGetDiscoverableRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryId
 * @property list<string> $recordIds
 */
class RegistryRecordsEntry extends Shape
{
    /**
     * @param array{
     *     registryId: string,
     *     recordIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
