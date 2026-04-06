<?php

namespace Sunaoka\Aws\Structures\Odb\StartDbNode;

trait StartDbNodeTrait
{
    /**
     * @param StartDbNodeRequest $args
     * @return StartDbNodeResponse
     */
    public function startDbNode(StartDbNodeRequest $args)
    {
        $result = parent::startDbNode($args->toArray());
        return new StartDbNodeResponse($result->toArray());
    }
}
