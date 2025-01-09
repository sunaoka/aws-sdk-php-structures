<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConformancePackComplianceScores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConformancePackComplianceScoresFilters $Filters
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property 'SCORE' $SortBy
 * @property int<0, 20> $Limit
 * @property string $NextToken
 */
class ListConformancePackComplianceScoresRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ConformancePackComplianceScoresFilters,
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     SortBy?: 'SCORE',
     *     Limit?: int<0, 20>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
