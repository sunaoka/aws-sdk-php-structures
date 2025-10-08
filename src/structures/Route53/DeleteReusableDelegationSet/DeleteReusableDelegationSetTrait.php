<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteReusableDelegationSet;

trait DeleteReusableDelegationSetTrait
{
    /**
     * @param DeleteReusableDelegationSetRequest $args
     * @return DeleteReusableDelegationSetResponse
     */
    public function deleteReusableDelegationSet(DeleteReusableDelegationSetRequest $args)
    {
        $result = parent::deleteReusableDelegationSet($args->toArray());
        return new DeleteReusableDelegationSetResponse($result->toArray());
    }
}
