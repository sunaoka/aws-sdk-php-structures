<?php

namespace Sunaoka\Aws\Structures\AppSync\StartSchemaMerge;

trait StartSchemaMergeTrait
{
    /**
     * @param StartSchemaMergeRequest $args
     * @return StartSchemaMergeResponse
     */
    public function startSchemaMerge(StartSchemaMergeRequest $args)
    {
        $result = parent::startSchemaMerge($args->toArray());
        return new StartSchemaMergeResponse($result->toArray());
    }
}
