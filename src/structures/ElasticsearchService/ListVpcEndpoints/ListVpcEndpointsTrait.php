<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpoints;

trait ListVpcEndpointsTrait
{
    /**
     * @param ListVpcEndpointsRequest $args
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpoints(ListVpcEndpointsRequest $args)
    {
        $result = parent::listVpcEndpoints($args->toArray());
        return new ListVpcEndpointsResponse($result->toArray());
    }
}
