<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode;

trait GetLineageNodeTrait
{
    /**
     * @param GetLineageNodeRequest $args
     * @return GetLineageNodeResponse
     */
    public function getLineageNode(GetLineageNodeRequest $args)
    {
        $result = parent::getLineageNode($args->toArray());
        return new GetLineageNodeResponse($result->toArray());
    }
}
