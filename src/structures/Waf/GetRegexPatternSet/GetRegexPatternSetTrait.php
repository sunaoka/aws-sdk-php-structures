<?php

namespace Sunaoka\Aws\Structures\Waf\GetRegexPatternSet;

trait GetRegexPatternSetTrait
{
    /**
     * @param GetRegexPatternSetRequest $args
     * @return GetRegexPatternSetResponse
     */
    public function getRegexPatternSet(GetRegexPatternSetRequest $args)
    {
        $result = parent::getRegexPatternSet($args->toArray());
        return new GetRegexPatternSetResponse($result->toArray());
    }
}
