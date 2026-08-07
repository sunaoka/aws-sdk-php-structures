<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $data
 * @property string|null $dataSchemaVersion
 * @property DescriptorSource|null $source
 */
class AgentSkillsMdDescriptor extends Shape
{
    /**
     * @param array{
     *     data?: string|null,
     *     dataSchemaVersion?: string|null,
     *     source?: DescriptorSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
