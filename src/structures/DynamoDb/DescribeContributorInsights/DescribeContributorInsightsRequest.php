<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContributorInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string|null $IndexName
 */
class DescribeContributorInsightsRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
