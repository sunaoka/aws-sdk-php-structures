<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedDescriptorData|null $data
 * @property UpdatedDataSchemaVersion|null $dataSchemaVersion
 * @property UpdatedDescriptorSource|null $source
 */
class UpdatedA2aAgentCardDescriptorFields extends Shape
{
    /**
     * @param array{
     *     data?: UpdatedDescriptorData|null,
     *     dataSchemaVersion?: UpdatedDataSchemaVersion|null,
     *     source?: UpdatedDescriptorSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
