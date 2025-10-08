<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateRegexMatchSet;

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
