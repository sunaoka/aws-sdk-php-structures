<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationFormVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationFormId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEvaluationFormVersionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationFormId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
