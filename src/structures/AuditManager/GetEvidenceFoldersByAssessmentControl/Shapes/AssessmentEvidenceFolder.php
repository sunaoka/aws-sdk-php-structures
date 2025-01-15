<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFoldersByAssessmentControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $date
 * @property string|null $assessmentId
 * @property string|null $controlSetId
 * @property string|null $controlId
 * @property string|null $id
 * @property string|null $dataSource
 * @property string|null $author
 * @property int|null $totalEvidence
 * @property int|null $assessmentReportSelectionCount
 * @property string|null $controlName
 * @property int|null $evidenceResourcesIncludedCount
 * @property int|null $evidenceByTypeConfigurationDataCount
 * @property int|null $evidenceByTypeManualCount
 * @property int|null $evidenceByTypeComplianceCheckCount
 * @property int|null $evidenceByTypeComplianceCheckIssuesCount
 * @property int|null $evidenceByTypeUserActivityCount
 * @property int|null $evidenceAwsServiceSourceCount
 */
class AssessmentEvidenceFolder extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     date?: \Aws\Api\DateTimeResult|null,
     *     assessmentId?: string|null,
     *     controlSetId?: string|null,
     *     controlId?: string|null,
     *     id?: string|null,
     *     dataSource?: string|null,
     *     author?: string|null,
     *     totalEvidence?: int|null,
     *     assessmentReportSelectionCount?: int|null,
     *     controlName?: string|null,
     *     evidenceResourcesIncludedCount?: int|null,
     *     evidenceByTypeConfigurationDataCount?: int|null,
     *     evidenceByTypeManualCount?: int|null,
     *     evidenceByTypeComplianceCheckCount?: int|null,
     *     evidenceByTypeComplianceCheckIssuesCount?: int|null,
     *     evidenceByTypeUserActivityCount?: int|null,
     *     evidenceAwsServiceSourceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
