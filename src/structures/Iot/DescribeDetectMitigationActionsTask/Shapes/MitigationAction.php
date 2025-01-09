<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDetectMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property string $roleArn
 * @property MitigationActionParams $actionParams
 */
class MitigationAction extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     id?: string,
     *     roleArn?: string,
     *     actionParams?: MitigationActionParams
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
