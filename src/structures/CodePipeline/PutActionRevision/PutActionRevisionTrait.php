<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutActionRevision;

trait PutActionRevisionTrait
{
    /**
     * @param PutActionRevisionRequest $args
     * @return PutActionRevisionResponse
     */
    public function putActionRevision(PutActionRevisionRequest $args)
    {
        $result = parent::putActionRevision($args->toArray());
        return new PutActionRevisionResponse($result->toArray());
    }
}
