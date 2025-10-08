<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteConstraint;

trait DeleteConstraintTrait
{
    /**
     * @param DeleteConstraintRequest $args
     * @return DeleteConstraintResponse
     */
    public function deleteConstraint(DeleteConstraintRequest $args)
    {
        $result = parent::deleteConstraint($args->toArray());
        return new DeleteConstraintResponse($result->toArray());
    }
}
