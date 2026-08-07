<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $data
 * @property string|null $dataSchemaVersion
 * @property McpServerAdditionalData|null $additionalData
 * @property DescriptorSource|null $source
 */
class McpServerDescriptor extends Shape
{
    /**
     * @param array{
     *     data?: string|null,
     *     dataSchemaVersion?: string|null,
     *     additionalData?: McpServerAdditionalData|null,
     *     source?: DescriptorSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
