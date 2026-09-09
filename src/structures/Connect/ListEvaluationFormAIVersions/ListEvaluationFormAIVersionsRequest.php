<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationFormAIVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'AGENT'|'AUTOMATED'|'CUSTOMER' $ContactInteractionType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEvaluationFormAIVersionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactInteractionType: 'AGENT'|'AUTOMATED'|'CUSTOMER',
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
