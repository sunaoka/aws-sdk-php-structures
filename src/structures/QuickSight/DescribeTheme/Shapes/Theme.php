<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $ThemeId
 * @property ThemeVersion|null $Version
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'QUICKSIGHT'|'CUSTOM'|'ALL'|null $Type
 */
class Theme extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     ThemeId?: string|null,
     *     Version?: ThemeVersion|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'QUICKSIGHT'|'CUSTOM'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
