<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeThemeAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AliasName
 * @property int<1, max> $ThemeVersionNumber
 */
class ThemeAlias extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AliasName?: string,
     *     ThemeVersionNumber?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
