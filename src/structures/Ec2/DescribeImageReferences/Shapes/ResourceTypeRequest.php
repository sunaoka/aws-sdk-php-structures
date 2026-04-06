<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ec2:Instance'|'ec2:LaunchTemplate'|'ssm:Parameter'|'imagebuilder:ImageRecipe'|'imagebuilder:ContainerRecipe'|null $ResourceType
 * @property list<ResourceTypeOption>|null $ResourceTypeOptions
 */
class ResourceTypeRequest extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'ec2:Instance'|'ec2:LaunchTemplate'|'ssm:Parameter'|'imagebuilder:ImageRecipe'|'imagebuilder:ContainerRecipe'|null,
     *     ResourceTypeOptions?: list<ResourceTypeOption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
