<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackageGroup;

trait CreateModelPackageGroupTrait
{
    /**
     * @param CreateModelPackageGroupRequest $args
     * @return CreateModelPackageGroupResponse
     */
    public function createModelPackageGroup(CreateModelPackageGroupRequest $args)
    {
        $result = parent::createModelPackageGroup($args->toArray());
        return new CreateModelPackageGroupResponse($result->toArray());
    }
}
