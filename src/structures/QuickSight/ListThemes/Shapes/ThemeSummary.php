<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $ThemeId
 * @property int<1, max> $LatestVersionNumber
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class ThemeSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     ThemeId?: string,
     *     LatestVersionNumber?: int<1, max>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
