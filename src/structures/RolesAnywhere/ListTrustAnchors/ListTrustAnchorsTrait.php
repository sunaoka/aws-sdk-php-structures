<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListTrustAnchors;

trait ListTrustAnchorsTrait
{
    /**
     * @param ListTrustAnchorsRequest $args
     * @return ListTrustAnchorsResponse
     */
    public function listTrustAnchors(ListTrustAnchorsRequest $args)
    {
        $result = parent::listTrustAnchors($args->toArray());
        return new ListTrustAnchorsResponse($result->toArray());
    }
}
