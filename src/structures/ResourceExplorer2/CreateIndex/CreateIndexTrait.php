<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateIndex;

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
