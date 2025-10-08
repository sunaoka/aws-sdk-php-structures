<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRegexMatchSet;

trait CreateRegexMatchSetTrait
{
    /**
     * @param CreateRegexMatchSetRequest $args
     * @return CreateRegexMatchSetResponse
     */
    public function createRegexMatchSet(CreateRegexMatchSetRequest $args)
    {
        $result = parent::createRegexMatchSet($args->toArray());
        return new CreateRegexMatchSetResponse($result->toArray());
    }
}
