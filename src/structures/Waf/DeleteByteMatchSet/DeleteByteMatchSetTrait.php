<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteByteMatchSet;

trait DeleteByteMatchSetTrait
{
    /**
     * @param DeleteByteMatchSetRequest $args
     * @return DeleteByteMatchSetResponse
     */
    public function deleteByteMatchSet(DeleteByteMatchSetRequest $args)
    {
        $result = parent::deleteByteMatchSet($args->toArray());
        return new DeleteByteMatchSetResponse($result->toArray());
    }
}
