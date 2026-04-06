<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DisableDNSView;

trait DisableDNSViewTrait
{
    /**
     * @param DisableDNSViewRequest $args
     * @return DisableDNSViewResponse
     */
    public function disableDNSView(DisableDNSViewRequest $args)
    {
        $result = parent::disableDNSView($args->toArray());
        return new DisableDNSViewResponse($result->toArray());
    }
}
