<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListVpcEndpointsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
