<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateConstraint;

trait UpdateConstraintTrait
{
    /**
     * @param UpdateConstraintRequest $args
     * @return UpdateConstraintResponse
     */
    public function updateConstraint(UpdateConstraintRequest $args)
    {
        $result = parent::updateConstraint($args->toArray());
        return new UpdateConstraintResponse($result->toArray());
    }
}
