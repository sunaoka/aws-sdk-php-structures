<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VpcEndpointIds
 */
class DescribeVpcEndpointsRequest extends Request
{
    /**
     * @param array{VpcEndpointIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
