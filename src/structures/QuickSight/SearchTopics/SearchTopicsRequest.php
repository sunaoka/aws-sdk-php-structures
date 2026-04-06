<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchTopics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\TopicSearchFilter> $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class SearchTopicsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\TopicSearchFilter>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
