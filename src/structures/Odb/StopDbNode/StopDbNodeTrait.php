<?php

namespace Sunaoka\Aws\Structures\Odb\StopDbNode;

trait StopDbNodeTrait
{
    /**
     * @param StopDbNodeRequest $args
     * @return StopDbNodeResponse
     */
    public function stopDbNode(StopDbNodeRequest $args)
    {
        $result = parent::stopDbNode($args->toArray());
        return new StopDbNodeResponse($result->toArray());
    }
}
