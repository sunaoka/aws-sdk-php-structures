<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListVpcOrigins;

trait ListVpcOriginsTrait
{
    /**
     * @param ListVpcOriginsRequest $args
     * @return ListVpcOriginsResponse
     */
    public function listVpcOrigins(ListVpcOriginsRequest $args)
    {
        $result = parent::listVpcOrigins($args->toArray());
        return new ListVpcOriginsResponse($result->toArray());
    }
}
