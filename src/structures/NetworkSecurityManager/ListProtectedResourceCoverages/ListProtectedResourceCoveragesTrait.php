<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListProtectedResourceCoverages;

trait ListProtectedResourceCoveragesTrait
{
    /**
     * @param ListProtectedResourceCoveragesRequest $args
     * @return ListProtectedResourceCoveragesResponse
     */
    public function listProtectedResourceCoverages(ListProtectedResourceCoveragesRequest $args)
    {
        $result = parent::listProtectedResourceCoverages($args->toArray());
        return new ListProtectedResourceCoveragesResponse($result->toArray());
    }
}
