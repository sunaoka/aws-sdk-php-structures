<?php

namespace Sunaoka\Aws\Structures\DAX\RebootNode;

trait RebootNodeTrait
{
    /**
     * @param RebootNodeRequest $args
     * @return RebootNodeResponse
     */
    public function rebootNode(RebootNodeRequest $args)
    {
        $result = parent::rebootNode($args->toArray());
        return new RebootNodeResponse($result->toArray());
    }
}
