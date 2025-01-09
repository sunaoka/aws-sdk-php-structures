<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property list<DashboardError> $Errors
 * @property int<1, max> $VersionNumber
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $Status
 * @property string $Arn
 * @property string $SourceEntityArn
 * @property list<string> $DataSetArns
 * @property string $Description
 * @property string $ThemeArn
 * @property list<Sheet> $Sheets
 */
class DashboardVersion extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Errors?: list<DashboardError>,
     *     VersionNumber?: int<1, max>,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED',
     *     Arn?: string,
     *     SourceEntityArn?: string,
     *     DataSetArns?: list<string>,
     *     Description?: string,
     *     ThemeArn?: string,
     *     Sheets?: list<Sheet>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
