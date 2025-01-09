<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnalysisId
 * @property string $Arn
 * @property string $Name
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $Status
 * @property list<AnalysisError> $Errors
 * @property list<string> $DataSetArns
 * @property string $ThemeArn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property list<Sheet> $Sheets
 */
class Analysis extends Shape
{
    /**
     * @param array{
     *     AnalysisId?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED',
     *     Errors?: list<AnalysisError>,
     *     DataSetArns?: list<string>,
     *     ThemeArn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     Sheets?: list<Sheet>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
