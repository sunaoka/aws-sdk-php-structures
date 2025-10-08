<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\Untag;

trait UntagTrait
{
    /**
     * @param UntagRequest $args
     * @return UntagResponse
     */
    public function untag(UntagRequest $args)
    {
        $result = parent::untag($args->toArray());
        return new UntagResponse($result->toArray());
    }
}
