<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAnomalousLogGroupsRequest extends Request
{
    /**
     * @param array{
     *     InsightId: string,
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
