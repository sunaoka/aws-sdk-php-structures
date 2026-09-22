<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAccessGrant;

trait GetAccessGrantTrait
{
    /**
     * @param GetAccessGrantRequest $args
     * @return GetAccessGrantResponse
     */
    public function getAccessGrant(GetAccessGrantRequest $args)
    {
        $result = parent::getAccessGrant($args->toArray());
        return new GetAccessGrantResponse($result->toArray());
    }
}
