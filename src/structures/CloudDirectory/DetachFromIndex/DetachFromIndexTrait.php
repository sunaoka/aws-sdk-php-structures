<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DetachFromIndex;

trait DetachFromIndexTrait
{
    /**
     * @param DetachFromIndexRequest $args
     * @return DetachFromIndexResponse
     */
    public function detachFromIndex(DetachFromIndexRequest $args)
    {
        $result = parent::detachFromIndex($args->toArray());
        return new DetachFromIndexResponse($result->toArray());
    }
}
