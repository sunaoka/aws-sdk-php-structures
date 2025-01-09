<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $ThemeId
 * @property ThemeVersion $Version
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'QUICKSIGHT'|'CUSTOM'|'ALL' $Type
 */
class Theme extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     ThemeId?: string,
     *     Version?: ThemeVersion,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     Type?: 'QUICKSIGHT'|'CUSTOM'|'ALL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
