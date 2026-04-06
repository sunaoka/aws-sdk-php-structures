<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property Shapes\QueueSearchFilter|null $SearchFilter
 * @property Shapes\QueueSearchCriteria|null $SearchCriteria
 */
class SearchQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     SearchFilter?: Shapes\QueueSearchFilter|null,
     *     SearchCriteria?: Shapes\QueueSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
