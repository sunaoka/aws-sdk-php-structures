<?php

namespace Sunaoka\Aws\Structures\Odb\GetDbNode;

trait GetDbNodeTrait
{
    /**
     * @param GetDbNodeRequest $args
     * @return GetDbNodeResponse
     */
    public function getDbNode(GetDbNodeRequest $args)
    {
        $result = parent::getDbNode($args->toArray());
        return new GetDbNodeResponse($result->toArray());
    }
}
