<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\CancelResourceRequest;

trait CancelResourceRequestTrait
{
    /**
     * @param CancelResourceRequestRequest $args
     * @return CancelResourceRequestResponse
     */
    public function cancelResourceRequest(CancelResourceRequestRequest $args)
    {
        $result = parent::cancelResourceRequest($args->toArray());
        return new CancelResourceRequestResponse($result->toArray());
    }
}
