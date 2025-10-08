<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteTape;

trait DeleteTapeTrait
{
    /**
     * @param DeleteTapeRequest $args
     * @return DeleteTapeResponse
     */
    public function deleteTape(DeleteTapeRequest $args)
    {
        $result = parent::deleteTape($args->toArray());
        return new DeleteTapeResponse($result->toArray());
    }
}
