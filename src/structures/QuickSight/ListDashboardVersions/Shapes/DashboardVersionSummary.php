<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDashboardVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property int $VersionNumber
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $Status
 * @property string $SourceEntityArn
 * @property string $Description
 */
class DashboardVersionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     VersionNumber?: int,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED',
     *     SourceEntityArn?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
