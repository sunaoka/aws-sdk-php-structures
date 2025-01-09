<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemeVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $VersionNumber
 * @property string $Arn
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $Status
 */
class ThemeVersionSummary extends Shape
{
    /**
     * @param array{
     *     VersionNumber?: int,
     *     Arn?: string,
     *     Description?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
