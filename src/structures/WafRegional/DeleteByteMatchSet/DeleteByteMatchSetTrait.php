<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteByteMatchSet;

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
