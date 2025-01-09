<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchTopics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\TopicSearchFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class SearchTopicsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\TopicSearchFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
