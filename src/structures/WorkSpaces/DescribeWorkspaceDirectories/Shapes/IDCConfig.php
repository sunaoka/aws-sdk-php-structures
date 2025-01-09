<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceArn
 * @property string $ApplicationArn
 */
class IDCConfig extends Shape
{
    /**
     * @param array{
     *     InstanceArn?: string,
     *     ApplicationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
