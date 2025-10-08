<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteIPSet;

trait DeleteIPSetTrait
{
    /**
     * @param DeleteIPSetRequest $args
     * @return DeleteIPSetResponse
     */
    public function deleteIPSet(DeleteIPSetRequest $args)
    {
        $result = parent::deleteIPSet($args->toArray());
        return new DeleteIPSetResponse($result->toArray());
    }
}
