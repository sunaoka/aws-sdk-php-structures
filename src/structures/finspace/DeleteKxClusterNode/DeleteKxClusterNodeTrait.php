<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxClusterNode;

trait DeleteKxClusterNodeTrait
{
    /**
     * @param DeleteKxClusterNodeRequest $args
     * @return DeleteKxClusterNodeResponse
     */
    public function deleteKxClusterNode(DeleteKxClusterNodeRequest $args)
    {
        $result = parent::deleteKxClusterNode($args->toArray());
        return new DeleteKxClusterNodeResponse($result->toArray());
    }
}
