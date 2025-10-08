<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode;

trait GetNodeTrait
{
    /**
     * @param GetNodeRequest $args
     * @return GetNodeResponse
     */
    public function getNode(GetNodeRequest $args)
    {
        $result = parent::getNode($args->toArray());
        return new GetNodeResponse($result->toArray());
    }
}
