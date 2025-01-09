<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property \Aws\Api\DateTimeResult $date
 * @property string $assessmentId
 * @property string $controlSetId
 * @property string $controlId
 * @property string $id
 * @property string $dataSource
 * @property string $author
 * @property int $totalEvidence
 * @property int $assessmentReportSelectionCount
 * @property string $controlName
 * @property int $evidenceResourcesIncludedCount
 * @property int $evidenceByTypeConfigurationDataCount
 * @property int $evidenceByTypeManualCount
 * @property int $evidenceByTypeComplianceCheckCount
 * @property int $evidenceByTypeComplianceCheckIssuesCount
 * @property int $evidenceByTypeUserActivityCount
 * @property int $evidenceAwsServiceSourceCount
 */
class AssessmentEvidenceFolder extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     date?: \Aws\Api\DateTimeResult,
     *     assessmentId?: string,
     *     controlSetId?: string,
     *     controlId?: string,
     *     id?: string,
     *     dataSource?: string,
     *     author?: string,
     *     totalEvidence?: int,
     *     assessmentReportSelectionCount?: int,
     *     controlName?: string,
     *     evidenceResourcesIncludedCount?: int,
     *     evidenceByTypeConfigurationDataCount?: int,
     *     evidenceByTypeManualCount?: int,
     *     evidenceByTypeComplianceCheckCount?: int,
     *     evidenceByTypeComplianceCheckIssuesCount?: int,
     *     evidenceByTypeUserActivityCount?: int,
     *     evidenceAwsServiceSourceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
