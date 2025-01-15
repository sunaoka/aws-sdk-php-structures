<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationArn
 * @property string|null $InstanceArn
 * @property string|null $Role
 */
class DescribedIdentityCenterConfig extends Shape
{
    /**
     * @param array{
     *     ApplicationArn?: string|null,
     *     InstanceArn?: string|null,
     *     Role?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
