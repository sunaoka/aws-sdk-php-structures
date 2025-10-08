<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetByteMatchSet;

trait GetByteMatchSetTrait
{
    /**
     * @param GetByteMatchSetRequest $args
     * @return GetByteMatchSetResponse
     */
    public function getByteMatchSet(GetByteMatchSetRequest $args)
    {
        $result = parent::getByteMatchSet($args->toArray());
        return new GetByteMatchSetResponse($result->toArray());
    }
}
