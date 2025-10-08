<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListAttachedIndices;

trait ListAttachedIndicesTrait
{
    /**
     * @param ListAttachedIndicesRequest $args
     * @return ListAttachedIndicesResponse
     */
    public function listAttachedIndices(ListAttachedIndicesRequest $args)
    {
        $result = parent::listAttachedIndices($args->toArray());
        return new ListAttachedIndicesResponse($result->toArray());
    }
}
