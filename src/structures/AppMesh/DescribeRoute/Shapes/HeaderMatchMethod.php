<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exact
 * @property string|null $prefix
 * @property MatchRange|null $range
 * @property string|null $regex
 * @property string|null $suffix
 */
class HeaderMatchMethod extends Shape
{
    /**
     * @param array{
     *     exact?: string|null,
     *     prefix?: string|null,
     *     range?: MatchRange|null,
     *     regex?: string|null,
     *     suffix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
