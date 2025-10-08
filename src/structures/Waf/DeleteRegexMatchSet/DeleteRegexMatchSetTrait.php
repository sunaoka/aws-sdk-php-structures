<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteRegexMatchSet;

trait DeleteRegexMatchSetTrait
{
    /**
     * @param DeleteRegexMatchSetRequest $args
     * @return DeleteRegexMatchSetResponse
     */
    public function deleteRegexMatchSet(DeleteRegexMatchSetRequest $args)
    {
        $result = parent::deleteRegexMatchSet($args->toArray());
        return new DeleteRegexMatchSetResponse($result->toArray());
    }
}
