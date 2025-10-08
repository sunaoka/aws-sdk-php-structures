<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateSizeConstraintSet;

trait CreateSizeConstraintSetTrait
{
    /**
     * @param CreateSizeConstraintSetRequest $args
     * @return CreateSizeConstraintSetResponse
     */
    public function createSizeConstraintSet(CreateSizeConstraintSetRequest $args)
    {
        $result = parent::createSizeConstraintSet($args->toArray());
        return new CreateSizeConstraintSetResponse($result->toArray());
    }
}
