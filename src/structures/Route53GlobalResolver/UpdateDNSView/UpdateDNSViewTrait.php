<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateDNSView;

trait UpdateDNSViewTrait
{
    /**
     * @param UpdateDNSViewRequest $args
     * @return UpdateDNSViewResponse
     */
    public function updateDNSView(UpdateDNSViewRequest $args)
    {
        $result = parent::updateDNSView($args->toArray());
        return new UpdateDNSViewResponse($result->toArray());
    }
}
