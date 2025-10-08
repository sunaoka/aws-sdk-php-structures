<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxChangeset;

trait CreateKxChangesetTrait
{
    /**
     * @param CreateKxChangesetRequest $args
     * @return CreateKxChangesetResponse
     */
    public function createKxChangeset(CreateKxChangesetRequest $args)
    {
        $result = parent::createKxChangeset($args->toArray());
        return new CreateKxChangesetResponse($result->toArray());
    }
}
