<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Managed
 * @property string $Principal
 */
class OperatorResponse extends Shape
{
    /**
     * @param array{
     *     Managed?: bool,
     *     Principal?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
