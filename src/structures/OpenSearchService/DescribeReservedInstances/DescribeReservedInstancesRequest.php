<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeReservedInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedInstanceId
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeReservedInstancesRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstanceId?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
