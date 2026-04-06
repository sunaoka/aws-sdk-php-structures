<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\EvaluationSearchCriteria|null $SearchCriteria
 * @property Shapes\EvaluationSearchFilter|null $SearchFilter
 */
class SearchContactEvaluationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchCriteria?: Shapes\EvaluationSearchCriteria|null,
     *     SearchFilter?: Shapes\EvaluationSearchFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
