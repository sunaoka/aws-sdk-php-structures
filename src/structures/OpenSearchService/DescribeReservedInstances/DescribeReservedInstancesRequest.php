<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeReservedInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedInstanceId
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeReservedInstancesRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstanceId?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
