<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateThemeAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AliasName
 * @property int $ThemeVersionNumber
 */
class ThemeAlias extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AliasName?: string,
     *     ThemeVersionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
