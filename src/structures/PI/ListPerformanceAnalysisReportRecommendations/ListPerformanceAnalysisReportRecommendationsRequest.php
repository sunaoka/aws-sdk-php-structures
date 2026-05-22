<?php

namespace Sunaoka\Aws\Structures\PI\ListPerformanceAnalysisReportRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property string $AnalysisReportId
 * @property list<string>|null $RecommendationIds
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPerformanceAnalysisReportRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     AnalysisReportId: string,
     *     RecommendationIds?: list<string>|null,
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
