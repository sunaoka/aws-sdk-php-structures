<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoot;

trait AssumeRootTrait
{
    /**
     * @param AssumeRootRequest $args
     * @return AssumeRootResponse
     */
    public function assumeRoot(AssumeRootRequest $args)
    {
        $result = parent::assumeRoot($args->toArray());
        return new AssumeRootResponse($result->toArray());
    }
}
