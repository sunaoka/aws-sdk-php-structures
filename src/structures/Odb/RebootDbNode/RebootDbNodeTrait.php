<?php

namespace Sunaoka\Aws\Structures\Odb\RebootDbNode;

trait RebootDbNodeTrait
{
    /**
     * @param RebootDbNodeRequest $args
     * @return RebootDbNodeResponse
     */
    public function rebootDbNode(RebootDbNodeRequest $args)
    {
        $result = parent::rebootDbNode($args->toArray());
        return new RebootDbNodeResponse($result->toArray());
    }
}
