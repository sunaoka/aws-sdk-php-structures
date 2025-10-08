<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpost;

trait GetOutpostTrait
{
    /**
     * @param GetOutpostRequest $args
     * @return GetOutpostResponse
     */
    public function getOutpost(GetOutpostRequest $args)
    {
        $result = parent::getOutpost($args->toArray());
        return new GetOutpostResponse($result->toArray());
    }
}
