<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationArn
 * @property string $InstanceArn
 * @property string $Role
 */
class DescribedIdentityCenterConfig extends Shape
{
    /**
     * @param array{
     *     ApplicationArn?: string,
     *     InstanceArn?: string,
     *     Role?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
