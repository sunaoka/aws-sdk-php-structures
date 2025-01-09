<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\QueueSearchFilter $SearchFilter
 * @property Shapes\QueueSearchCriteria $SearchCriteria
 */
class SearchQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SearchFilter?: Shapes\QueueSearchFilter,
     *     SearchCriteria?: Shapes\QueueSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
