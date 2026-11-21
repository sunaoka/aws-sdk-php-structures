<?php

namespace Sunaoka\Aws\Structures\APIPortal\AssociateManagedApis;

trait AssociateManagedApisTrait
{
    /**
     * @param AssociateManagedApisRequest $args
     * @return AssociateManagedApisResponse
     */
    public function associateManagedApis(AssociateManagedApisRequest $args)
    {
        $result = parent::associateManagedApis($args->toArray());
        return new AssociateManagedApisResponse($result->toArray());
    }
}
