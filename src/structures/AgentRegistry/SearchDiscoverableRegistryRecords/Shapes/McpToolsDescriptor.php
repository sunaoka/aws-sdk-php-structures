<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $data
 * @property string|null $dataSchemaVersion
 */
class McpToolsDescriptor extends Shape
{
    /**
     * @param array{
     *     data?: string|null,
     *     dataSchemaVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
