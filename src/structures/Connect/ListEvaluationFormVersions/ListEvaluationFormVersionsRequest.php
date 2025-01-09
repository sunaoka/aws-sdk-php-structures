<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationFormVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationFormId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListEvaluationFormVersionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationFormId: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
