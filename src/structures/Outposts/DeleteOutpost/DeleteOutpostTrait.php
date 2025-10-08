<?php

namespace Sunaoka\Aws\Structures\Outposts\DeleteOutpost;

trait DeleteOutpostTrait
{
    /**
     * @param DeleteOutpostRequest $args
     * @return DeleteOutpostResponse
     */
    public function deleteOutpost(DeleteOutpostRequest $args)
    {
        $result = parent::deleteOutpost($args->toArray());
        return new DeleteOutpostResponse($result->toArray());
    }
}
