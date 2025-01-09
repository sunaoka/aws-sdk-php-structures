<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exact
 * @property string $prefix
 * @property MatchRange $range
 * @property string $regex
 * @property string $suffix
 */
class HeaderMatchMethod extends Shape
{
    /**
     * @param array{
     *     exact?: string,
     *     prefix?: string,
     *     range?: MatchRange,
     *     regex?: string,
     *     suffix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
