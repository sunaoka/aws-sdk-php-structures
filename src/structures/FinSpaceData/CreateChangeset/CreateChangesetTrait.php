<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateChangeset;

trait CreateChangesetTrait
{
    /**
     * @param CreateChangesetRequest $args
     * @return CreateChangesetResponse
     */
    public function createChangeset(CreateChangesetRequest $args)
    {
        $result = parent::createChangeset($args->toArray());
        return new CreateChangesetResponse($result->toArray());
    }
}
