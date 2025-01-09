<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListContributorInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $NextToken
 * @property int<min, 100> $MaxResults
 */
class ListContributorInsightsRequest extends Request
{
    /**
     * @param array{
     *     TableName?: string,
     *     NextToken?: string,
     *     MaxResults?: int<min, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
