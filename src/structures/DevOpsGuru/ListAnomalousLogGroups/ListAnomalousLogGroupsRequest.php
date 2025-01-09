<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 * @property int<1, 200> $MaxResults
 * @property string $NextToken
 */
class ListAnomalousLogGroupsRequest extends Request
{
    /**
     * @param array{
     *     InsightId: string,
     *     MaxResults?: int<1, 200>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
