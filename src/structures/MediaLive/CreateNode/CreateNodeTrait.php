<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNode;

trait CreateNodeTrait
{
    /**
     * @param CreateNodeRequest $args
     * @return CreateNodeResponse
     */
    public function createNode(CreateNodeRequest $args)
    {
        $result = parent::createNode($args->toArray());
        return new CreateNodeResponse($result->toArray());
    }
}
