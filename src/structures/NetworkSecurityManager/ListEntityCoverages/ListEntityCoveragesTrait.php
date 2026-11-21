<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListEntityCoverages;

trait ListEntityCoveragesTrait
{
    /**
     * @param ListEntityCoveragesRequest $args
     * @return ListEntityCoveragesResponse
     */
    public function listEntityCoverages(ListEntityCoveragesRequest $args)
    {
        $result = parent::listEntityCoverages($args->toArray());
        return new ListEntityCoveragesResponse($result->toArray());
    }
}
