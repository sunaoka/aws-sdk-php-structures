<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeTagOption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 * @property bool|null $Active
 * @property string|null $Id
 * @property string|null $Owner
 */
class TagOptionDetail extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null,
     *     Active?: bool|null,
     *     Id?: string|null,
     *     Owner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
