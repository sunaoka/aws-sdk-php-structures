<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedDescriptorData|null $data
 * @property UpdatedDataSchemaVersion|null $dataSchemaVersion
 */
class UpdatedMcpToolsDescriptorFields extends Shape
{
    /**
     * @param array{
     *     data?: UpdatedDescriptorData|null,
     *     dataSchemaVersion?: UpdatedDataSchemaVersion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
