<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteXssMatchSet;

trait DeleteXssMatchSetTrait
{
    /**
     * @param DeleteXssMatchSetRequest $args
     * @return DeleteXssMatchSetResponse
     */
    public function deleteXssMatchSet(DeleteXssMatchSetRequest $args)
    {
        $result = parent::deleteXssMatchSet($args->toArray());
        return new DeleteXssMatchSetResponse($result->toArray());
    }
}
