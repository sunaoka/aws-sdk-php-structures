<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer;

trait GetTransformerTrait
{
    /**
     * @param GetTransformerRequest $args
     * @return GetTransformerResponse
     */
    public function getTransformer(GetTransformerRequest $args)
    {
        $result = parent::getTransformer($args->toArray());
        return new GetTransformerResponse($result->toArray());
    }
}
