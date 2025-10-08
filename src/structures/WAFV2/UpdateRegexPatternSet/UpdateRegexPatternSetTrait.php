<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRegexPatternSet;

trait UpdateRegexPatternSetTrait
{
    /**
     * @param UpdateRegexPatternSetRequest $args
     * @return UpdateRegexPatternSetResponse
     */
    public function updateRegexPatternSet(UpdateRegexPatternSetRequest $args)
    {
        $result = parent::updateRegexPatternSet($args->toArray());
        return new UpdateRegexPatternSetResponse($result->toArray());
    }
}
