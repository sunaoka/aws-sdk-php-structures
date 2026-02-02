<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetIdentityContext;

trait GetIdentityContextTrait
{
    /**
     * @param GetIdentityContextRequest $args
     * @return GetIdentityContextResponse
     */
    public function getIdentityContext(GetIdentityContextRequest $args)
    {
        $result = parent::getIdentityContext($args->toArray());
        return new GetIdentityContextResponse($result->toArray());
    }
}
