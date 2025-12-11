<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetDNSView;

trait GetDNSViewTrait
{
    /**
     * @param GetDNSViewRequest $args
     * @return GetDNSViewResponse
     */
    public function getDNSView(GetDNSViewRequest $args)
    {
        $result = parent::getDNSView($args->toArray());
        return new GetDNSViewResponse($result->toArray());
    }
}
