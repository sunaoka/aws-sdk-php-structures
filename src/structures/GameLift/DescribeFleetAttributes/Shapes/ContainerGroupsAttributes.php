<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContainerGroupDefinitionProperty>|null $ContainerGroupDefinitionProperties
 * @property ConnectionPortRange|null $ConnectionPortRange
 * @property ContainerGroupsPerInstance|null $ContainerGroupsPerInstance
 */
class ContainerGroupsAttributes extends Shape
{
    /**
     * @param array{
     *     ContainerGroupDefinitionProperties?: list<ContainerGroupDefinitionProperty>|null,
     *     ConnectionPortRange?: ConnectionPortRange|null,
     *     ContainerGroupsPerInstance?: ContainerGroupsPerInstance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
