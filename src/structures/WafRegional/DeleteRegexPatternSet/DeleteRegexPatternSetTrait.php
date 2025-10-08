<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteRegexPatternSet;

trait DeleteRegexPatternSetTrait
{
    /**
     * @param DeleteRegexPatternSetRequest $args
     * @return DeleteRegexPatternSetResponse
     */
    public function deleteRegexPatternSet(DeleteRegexPatternSetRequest $args)
    {
        $result = parent::deleteRegexPatternSet($args->toArray());
        return new DeleteRegexPatternSetResponse($result->toArray());
    }
}
