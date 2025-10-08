<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateOutpost;

trait UpdateOutpostTrait
{
    /**
     * @param UpdateOutpostRequest $args
     * @return UpdateOutpostResponse
     */
    public function updateOutpost(UpdateOutpostRequest $args)
    {
        $result = parent::updateOutpost($args->toArray());
        return new UpdateOutpostResponse($result->toArray());
    }
}
