<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilePath
 * @property string $RecommendationId
 * @property int $StartLine
 * @property int $EndLine
 * @property string $Description
 * @property 'AWSBestPractices'|'AWSCloudFormationIssues'|'DuplicateCode'|'CodeMaintenanceIssues'|'ConcurrencyIssues'|'InputValidations'|'PythonBestPractices'|'JavaBestPractices'|'ResourceLeaks'|'SecurityIssues'|'CodeInconsistencies' $RecommendationCategory
 * @property RuleMetadata $RuleMetadata
 * @property 'Info'|'Low'|'Medium'|'High'|'Critical' $Severity
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     FilePath?: string,
     *     RecommendationId?: string,
     *     StartLine?: int,
     *     EndLine?: int,
     *     Description?: string,
     *     RecommendationCategory?: 'AWSBestPractices'|'AWSCloudFormationIssues'|'DuplicateCode'|'CodeMaintenanceIssues'|'ConcurrencyIssues'|'InputValidations'|'PythonBestPractices'|'JavaBestPractices'|'ResourceLeaks'|'SecurityIssues'|'CodeInconsistencies',
     *     RuleMetadata?: RuleMetadata,
     *     Severity?: 'Info'|'Low'|'Medium'|'High'|'Critical'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
