<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FilePath
 * @property string|null $RecommendationId
 * @property int|null $StartLine
 * @property int|null $EndLine
 * @property string|null $Description
 * @property 'AWSBestPractices'|'AWSCloudFormationIssues'|'DuplicateCode'|'CodeMaintenanceIssues'|'ConcurrencyIssues'|'InputValidations'|'PythonBestPractices'|'JavaBestPractices'|'ResourceLeaks'|'SecurityIssues'|'CodeInconsistencies'|null $RecommendationCategory
 * @property RuleMetadata|null $RuleMetadata
 * @property 'Info'|'Low'|'Medium'|'High'|'Critical'|null $Severity
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     FilePath?: string|null,
     *     RecommendationId?: string|null,
     *     StartLine?: int|null,
     *     EndLine?: int|null,
     *     Description?: string|null,
     *     RecommendationCategory?: 'AWSBestPractices'|'AWSCloudFormationIssues'|'DuplicateCode'|'CodeMaintenanceIssues'|'ConcurrencyIssues'|'InputValidations'|'PythonBestPractices'|'JavaBestPractices'|'ResourceLeaks'|'SecurityIssues'|'CodeInconsistencies'|null,
     *     RuleMetadata?: RuleMetadata|null,
     *     Severity?: 'Info'|'Low'|'Medium'|'High'|'Critical'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
