<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateByteMatchSet;

trait UpdateByteMatchSetTrait
{
    /**
     * @param UpdateByteMatchSetRequest $args
     * @return UpdateByteMatchSetResponse
     */
    public function updateByteMatchSet(UpdateByteMatchSetRequest $args)
    {
        $result = parent::updateByteMatchSet($args->toArray());
        return new UpdateByteMatchSetResponse($result->toArray());
    }
}
