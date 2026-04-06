<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\EnableDNSView;

trait EnableDNSViewTrait
{
    /**
     * @param EnableDNSViewRequest $args
     * @return EnableDNSViewResponse
     */
    public function enableDNSView(EnableDNSViewRequest $args)
    {
        $result = parent::enableDNSView($args->toArray());
        return new EnableDNSViewResponse($result->toArray());
    }
}
