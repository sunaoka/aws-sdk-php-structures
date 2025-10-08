<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateRegexMatchSet;

trait UpdateRegexMatchSetTrait
{
    /**
     * @param UpdateRegexMatchSetRequest $args
     * @return UpdateRegexMatchSetResponse
     */
    public function updateRegexMatchSet(UpdateRegexMatchSetRequest $args)
    {
        $result = parent::updateRegexMatchSet($args->toArray());
        return new UpdateRegexMatchSetResponse($result->toArray());
    }
}
