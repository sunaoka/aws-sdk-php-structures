<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\GetWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EC2ErrorCode
 * @property string|null $EC2ExceptionType
 * @property string|null $EC2ErrorMessage
 */
class EC2InstanceError extends Shape
{
    /**
     * @param array{
     *     EC2ErrorCode?: string|null,
     *     EC2ExceptionType?: string|null,
     *     EC2ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
