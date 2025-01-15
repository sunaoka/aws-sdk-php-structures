<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateThemeAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $AliasName
 * @property int<1, max>|null $ThemeVersionNumber
 */
class ThemeAlias extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AliasName?: string|null,
     *     ThemeVersionNumber?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
