<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateMemory;

trait CreateMemoryTrait
{
    /**
     * @param CreateMemoryRequest $args
     * @return CreateMemoryResponse
     */
    public function createMemory(CreateMemoryRequest $args)
    {
        $result = parent::createMemory($args->toArray());
        return new CreateMemoryResponse($result->toArray());
    }
}
