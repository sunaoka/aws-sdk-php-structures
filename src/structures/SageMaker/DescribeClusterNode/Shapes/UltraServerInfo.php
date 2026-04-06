<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Type
 */
class UltraServerInfo extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
