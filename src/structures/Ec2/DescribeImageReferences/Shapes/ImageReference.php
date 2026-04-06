<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImageId
 * @property 'ec2:Instance'|'ec2:LaunchTemplate'|'ssm:Parameter'|'imagebuilder:ImageRecipe'|'imagebuilder:ContainerRecipe'|null $ResourceType
 * @property string|null $Arn
 */
class ImageReference extends Shape
{
    /**
     * @param array{
     *     ImageId?: string|null,
     *     ResourceType?: 'ec2:Instance'|'ec2:LaunchTemplate'|'ssm:Parameter'|'imagebuilder:ImageRecipe'|'imagebuilder:ContainerRecipe'|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
