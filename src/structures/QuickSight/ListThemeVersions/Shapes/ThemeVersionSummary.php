<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemeVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $VersionNumber
 * @property string|null $Arn
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $Status
 */
class ThemeVersionSummary extends Shape
{
    /**
     * @param array{
     *     VersionNumber?: int<1, max>|null,
     *     Arn?: string|null,
     *     Description?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
