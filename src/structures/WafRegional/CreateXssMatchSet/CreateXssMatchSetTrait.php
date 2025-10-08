<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateXssMatchSet;

trait CreateXssMatchSetTrait
{
    /**
     * @param CreateXssMatchSetRequest $args
     * @return CreateXssMatchSetResponse
     */
    public function createXssMatchSet(CreateXssMatchSetRequest $args)
    {
        $result = parent::createXssMatchSet($args->toArray());
        return new CreateXssMatchSetResponse($result->toArray());
    }
}
