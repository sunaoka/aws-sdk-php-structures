<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteIndex;

trait DeleteIndexTrait
{
    /**
     * @param DeleteIndexRequest $args
     * @return DeleteIndexResponse
     */
    public function deleteIndex(DeleteIndexRequest $args)
    {
        $result = parent::deleteIndex($args->toArray());
        return new DeleteIndexResponse($result->toArray());
    }
}
