<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnalysisId
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $Status
 * @property list<AnalysisError>|null $Errors
 * @property list<string>|null $DataSetArns
 * @property string|null $ThemeArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property list<Sheet>|null $Sheets
 */
class Analysis extends Shape
{
    /**
     * @param array{
     *     AnalysisId?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null,
     *     Errors?: list<AnalysisError>|null,
     *     DataSetArns?: list<string>|null,
     *     ThemeArn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Sheets?: list<Sheet>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
