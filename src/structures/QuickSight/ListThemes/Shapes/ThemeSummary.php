<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $ThemeId
 * @property int<1, max>|null $LatestVersionNumber
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class ThemeSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     ThemeId?: string|null,
     *     LatestVersionNumber?: int<1, max>|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
