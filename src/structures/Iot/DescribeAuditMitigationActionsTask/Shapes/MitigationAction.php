<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $roleArn
 * @property MitigationActionParams|null $actionParams
 */
class MitigationAction extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     roleArn?: string|null,
     *     actionParams?: MitigationActionParams|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
