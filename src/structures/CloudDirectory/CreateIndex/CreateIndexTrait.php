<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateIndex;

trait CreateIndexTrait
{
    /**
     * @param CreateIndexRequest $args
     * @return CreateIndexResponse
     */
    public function createIndex(CreateIndexRequest $args)
    {
        $result = parent::createIndex($args->toArray());
        return new CreateIndexResponse($result->toArray());
    }
}
