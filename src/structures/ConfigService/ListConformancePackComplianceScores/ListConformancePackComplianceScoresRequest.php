<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConformancePackComplianceScores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConformancePackComplianceScoresFilters|null $Filters
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property 'SCORE'|null $SortBy
 * @property int<0, 20>|null $Limit
 * @property string|null $NextToken
 */
class ListConformancePackComplianceScoresRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ConformancePackComplianceScoresFilters|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     SortBy?: 'SCORE'|null,
     *     Limit?: int<0, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
