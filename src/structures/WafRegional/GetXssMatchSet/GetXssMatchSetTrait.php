<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetXssMatchSet;

trait GetXssMatchSetTrait
{
    /**
     * @param GetXssMatchSetRequest $args
     * @return GetXssMatchSetResponse
     */
    public function getXssMatchSet(GetXssMatchSetRequest $args)
    {
        $result = parent::getXssMatchSet($args->toArray());
        return new GetXssMatchSetResponse($result->toArray());
    }
}
