<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $VersionNumber
 * @property string|null $Arn
 * @property string|null $Description
 * @property string|null $BaseThemeId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property ThemeConfiguration|null $Configuration
 * @property list<ThemeError>|null $Errors
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $Status
 */
class ThemeVersion extends Shape
{
    /**
     * @param array{
     *     VersionNumber?: int<1, max>|null,
     *     Arn?: string|null,
     *     Description?: string|null,
     *     BaseThemeId?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Configuration?: ThemeConfiguration|null,
     *     Errors?: list<ThemeError>|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
