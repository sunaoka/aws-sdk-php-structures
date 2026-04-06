<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceArn
 * @property string|null $ApplicationArn
 */
class IDCConfig extends Shape
{
    /**
     * @param array{
     *     InstanceArn?: string|null,
     *     ApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
