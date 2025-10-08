<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetMergeOptions;

trait GetMergeOptionsTrait
{
    /**
     * @param GetMergeOptionsRequest $args
     * @return GetMergeOptionsResponse
     */
    public function getMergeOptions(GetMergeOptionsRequest $args)
    {
        $result = parent::getMergeOptions($args->toArray());
        return new GetMergeOptionsResponse($result->toArray());
    }
}
