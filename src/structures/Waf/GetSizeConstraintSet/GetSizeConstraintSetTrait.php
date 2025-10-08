<?php

namespace Sunaoka\Aws\Structures\Waf\GetSizeConstraintSet;

trait GetSizeConstraintSetTrait
{
    /**
     * @param GetSizeConstraintSetRequest $args
     * @return GetSizeConstraintSetResponse
     */
    public function getSizeConstraintSet(GetSizeConstraintSetRequest $args)
    {
        $result = parent::getSizeConstraintSet($args->toArray());
        return new GetSizeConstraintSetResponse($result->toArray());
    }
}
