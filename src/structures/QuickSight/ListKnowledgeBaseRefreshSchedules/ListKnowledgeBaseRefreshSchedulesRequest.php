<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListKnowledgeBaseRefreshSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $KnowledgeBaseId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListKnowledgeBaseRefreshSchedulesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     KnowledgeBaseId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
