<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRegexPatternSet;

trait CreateRegexPatternSetTrait
{
    /**
     * @param CreateRegexPatternSetRequest $args
     * @return CreateRegexPatternSetResponse
     */
    public function createRegexPatternSet(CreateRegexPatternSetRequest $args)
    {
        $result = parent::createRegexPatternSet($args->toArray());
        return new CreateRegexPatternSetResponse($result->toArray());
    }
}
