<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 */
class LaunchPath extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
