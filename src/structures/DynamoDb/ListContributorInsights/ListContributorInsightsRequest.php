<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListContributorInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TableName
 * @property string|null $NextToken
 * @property int<min, 100>|null $MaxResults
 */
class ListContributorInsightsRequest extends Request
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<min, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
