<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListVpcEndpointsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
