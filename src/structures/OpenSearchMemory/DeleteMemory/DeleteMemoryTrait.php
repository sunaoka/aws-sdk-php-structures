<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\DeleteMemory;

trait DeleteMemoryTrait
{
    /**
     * @param DeleteMemoryRequest $args
     * @return DeleteMemoryResponse
     */
    public function deleteMemory(DeleteMemoryRequest $args)
    {
        $result = parent::deleteMemory($args->toArray());
        return new DeleteMemoryResponse($result->toArray());
    }
}
