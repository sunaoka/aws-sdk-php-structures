<?php

namespace Sunaoka\Aws\Structures\Waf\GetRegexMatchSet;

trait GetRegexMatchSetTrait
{
    /**
     * @param GetRegexMatchSetRequest $args
     * @return GetRegexMatchSetResponse
     */
    public function getRegexMatchSet(GetRegexMatchSetRequest $args)
    {
        $result = parent::getRegexMatchSet($args->toArray());
        return new GetRegexMatchSetResponse($result->toArray());
    }
}
