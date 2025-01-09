<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $VersionNumber
 * @property string $Arn
 * @property string $Description
 * @property string $BaseThemeId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property ThemeConfiguration $Configuration
 * @property list<ThemeError> $Errors
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $Status
 */
class ThemeVersion extends Shape
{
    /**
     * @param array{
     *     VersionNumber?: int,
     *     Arn?: string,
     *     Description?: string,
     *     BaseThemeId?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Configuration?: ThemeConfiguration,
     *     Errors?: list<ThemeError>,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
