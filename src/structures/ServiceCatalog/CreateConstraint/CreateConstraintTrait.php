<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateConstraint;

trait CreateConstraintTrait
{
    /**
     * @param CreateConstraintRequest $args
     * @return CreateConstraintResponse
     */
    public function createConstraint(CreateConstraintRequest $args)
    {
        $result = parent::createConstraint($args->toArray());
        return new CreateConstraintResponse($result->toArray());
    }
}
