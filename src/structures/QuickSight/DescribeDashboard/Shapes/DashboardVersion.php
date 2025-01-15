<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property list<DashboardError>|null $Errors
 * @property int<1, max>|null $VersionNumber
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $Status
 * @property string|null $Arn
 * @property string|null $SourceEntityArn
 * @property list<string>|null $DataSetArns
 * @property string|null $Description
 * @property string|null $ThemeArn
 * @property list<Sheet>|null $Sheets
 */
class DashboardVersion extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Errors?: list<DashboardError>|null,
     *     VersionNumber?: int<1, max>|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null,
     *     Arn?: string|null,
     *     SourceEntityArn?: string|null,
     *     DataSetArns?: list<string>|null,
     *     Description?: string|null,
     *     ThemeArn?: string|null,
     *     Sheets?: list<Sheet>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
