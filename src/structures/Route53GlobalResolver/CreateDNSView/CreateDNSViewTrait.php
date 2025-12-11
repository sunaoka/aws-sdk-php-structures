<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateDNSView;

trait CreateDNSViewTrait
{
    /**
     * @param CreateDNSViewRequest $args
     * @return CreateDNSViewResponse
     */
    public function createDNSView(CreateDNSViewRequest $args)
    {
        $result = parent::createDNSView($args->toArray());
        return new CreateDNSViewResponse($result->toArray());
    }
}
