<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph;

trait GetContextGraphTrait
{
    /**
     * @param GetContextGraphRequest $args
     * @return GetContextGraphResponse
     */
    public function getContextGraph(GetContextGraphRequest $args)
    {
        $result = parent::getContextGraph($args->toArray());
        return new GetContextGraphResponse($result->toArray());
    }
}
