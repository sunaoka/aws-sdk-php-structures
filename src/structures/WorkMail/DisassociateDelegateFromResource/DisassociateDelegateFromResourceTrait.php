<?php

namespace Sunaoka\Aws\Structures\WorkMail\DisassociateDelegateFromResource;

trait DisassociateDelegateFromResourceTrait
{
    /**
     * @param DisassociateDelegateFromResourceRequest $args
     * @return DisassociateDelegateFromResourceResponse
     */
    public function disassociateDelegateFromResource(DisassociateDelegateFromResourceRequest $args)
    {
        $result = parent::disassociateDelegateFromResource($args->toArray());
        return new DisassociateDelegateFromResourceResponse($result->toArray());
    }
}
