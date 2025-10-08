<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxChangeset;

trait GetKxChangesetTrait
{
    /**
     * @param GetKxChangesetRequest $args
     * @return GetKxChangesetResponse
     */
    public function getKxChangeset(GetKxChangesetRequest $args)
    {
        $result = parent::getKxChangeset($args->toArray());
        return new GetKxChangesetResponse($result->toArray());
    }
}
