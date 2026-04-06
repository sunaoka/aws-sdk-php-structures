<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeCustomWorkspaceImageImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ec2ImportTaskId
 * @property string|null $ImageBuildVersionArn
 * @property string|null $Ec2ImageId
 */
class ImageSourceIdentifier extends Shape
{
    /**
     * @param array{
     *     Ec2ImportTaskId?: string|null,
     *     ImageBuildVersionArn?: string|null,
     *     Ec2ImageId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
