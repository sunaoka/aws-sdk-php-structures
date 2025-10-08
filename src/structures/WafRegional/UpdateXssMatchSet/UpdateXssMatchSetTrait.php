<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateXssMatchSet;

trait UpdateXssMatchSetTrait
{
    /**
     * @param UpdateXssMatchSetRequest $args
     * @return UpdateXssMatchSetResponse
     */
    public function updateXssMatchSet(UpdateXssMatchSetRequest $args)
    {
        $result = parent::updateXssMatchSet($args->toArray());
        return new UpdateXssMatchSetResponse($result->toArray());
    }
}
