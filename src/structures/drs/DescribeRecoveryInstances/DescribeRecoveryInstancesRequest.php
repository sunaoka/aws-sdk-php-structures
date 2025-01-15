<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeRecoveryInstancesRequestFilters|null $filters
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeRecoveryInstancesRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeRecoveryInstancesRequestFilters|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
