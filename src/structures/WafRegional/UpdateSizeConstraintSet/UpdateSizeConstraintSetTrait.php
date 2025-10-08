<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateSizeConstraintSet;

trait UpdateSizeConstraintSetTrait
{
    /**
     * @param UpdateSizeConstraintSetRequest $args
     * @return UpdateSizeConstraintSetResponse
     */
    public function updateSizeConstraintSet(UpdateSizeConstraintSetRequest $args)
    {
        $result = parent::updateSizeConstraintSet($args->toArray());
        return new UpdateSizeConstraintSetResponse($result->toArray());
    }
}
