<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeTagOption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property bool $Active
 * @property string $Id
 * @property string $Owner
 */
class TagOptionDetail extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     Active?: bool,
     *     Id?: string,
     *     Owner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
