<?php

namespace Sunaoka\Aws\Structures\mgn\FinalizeCutover;

trait FinalizeCutoverTrait
{
    /**
     * @param FinalizeCutoverRequest $args
     * @return FinalizeCutoverResponse
     */
    public function finalizeCutover(FinalizeCutoverRequest $args)
    {
        $result = parent::finalizeCutover($args->toArray());
        return new FinalizeCutoverResponse($result->toArray());
    }
}
