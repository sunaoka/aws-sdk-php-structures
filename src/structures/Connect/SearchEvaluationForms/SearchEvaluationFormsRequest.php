<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEvaluationForms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\EvaluationFormSearchCriteria|null $SearchCriteria
 * @property Shapes\EvaluationFormSearchFilter|null $SearchFilter
 */
class SearchEvaluationFormsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchCriteria?: Shapes\EvaluationFormSearchCriteria|null,
     *     SearchFilter?: Shapes\EvaluationFormSearchFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
