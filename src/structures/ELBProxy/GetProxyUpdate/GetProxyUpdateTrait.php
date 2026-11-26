<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyUpdate;

trait GetProxyUpdateTrait
{
    /**
     * @param GetProxyUpdateRequest $args
     * @return GetProxyUpdateResponse
     */
    public function getProxyUpdate(GetProxyUpdateRequest $args)
    {
        $result = parent::getProxyUpdate($args->toArray());
        return new GetProxyUpdateResponse($result->toArray());
    }
}
