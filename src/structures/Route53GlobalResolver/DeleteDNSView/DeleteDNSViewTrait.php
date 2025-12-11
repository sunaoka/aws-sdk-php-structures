<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteDNSView;

trait DeleteDNSViewTrait
{
    /**
     * @param DeleteDNSViewRequest $args
     * @return DeleteDNSViewResponse
     */
    public function deleteDNSView(DeleteDNSViewRequest $args)
    {
        $result = parent::deleteDNSView($args->toArray());
        return new DeleteDNSViewResponse($result->toArray());
    }
}
