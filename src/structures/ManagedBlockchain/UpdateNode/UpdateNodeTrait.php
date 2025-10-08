<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateNode;

trait UpdateNodeTrait
{
    /**
     * @param UpdateNodeRequest $args
     * @return UpdateNodeResponse
     */
    public function updateNode(UpdateNodeRequest $args)
    {
        $result = parent::updateNode($args->toArray());
        return new UpdateNodeResponse($result->toArray());
    }
}
