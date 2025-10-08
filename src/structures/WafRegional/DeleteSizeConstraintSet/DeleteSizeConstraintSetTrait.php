<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteSizeConstraintSet;

trait DeleteSizeConstraintSetTrait
{
    /**
     * @param DeleteSizeConstraintSetRequest $args
     * @return DeleteSizeConstraintSetResponse
     */
    public function deleteSizeConstraintSet(DeleteSizeConstraintSetRequest $args)
    {
        $result = parent::deleteSizeConstraintSet($args->toArray());
        return new DeleteSizeConstraintSetResponse($result->toArray());
    }
}
