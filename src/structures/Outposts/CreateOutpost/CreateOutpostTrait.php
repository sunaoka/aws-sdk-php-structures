<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOutpost;

trait CreateOutpostTrait
{
    /**
     * @param CreateOutpostRequest $args
     * @return CreateOutpostResponse
     */
    public function createOutpost(CreateOutpostRequest $args)
    {
        $result = parent::createOutpost($args->toArray());
        return new CreateOutpostResponse($result->toArray());
    }
}
