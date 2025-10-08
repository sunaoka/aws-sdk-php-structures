<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\DeleteNode;

trait DeleteNodeTrait
{
    /**
     * @param DeleteNodeRequest $args
     * @return DeleteNodeResponse
     */
    public function deleteNode(DeleteNodeRequest $args)
    {
        $result = parent::deleteNode($args->toArray());
        return new DeleteNodeResponse($result->toArray());
    }
}
