<?php

namespace Sunaoka\Aws\Structures\Ecr\ListImageReferrers;

trait ListImageReferrersTrait
{
    /**
     * @param ListImageReferrersRequest $args
     * @return ListImageReferrersResponse
     */
    public function listImageReferrers(ListImageReferrersRequest $args)
    {
        $result = parent::listImageReferrers($args->toArray());
        return new ListImageReferrersResponse($result->toArray());
    }
}
