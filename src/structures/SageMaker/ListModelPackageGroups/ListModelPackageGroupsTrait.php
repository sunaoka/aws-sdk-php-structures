<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelPackageGroups;

trait ListModelPackageGroupsTrait
{
    /**
     * @param ListModelPackageGroupsRequest $args
     * @return ListModelPackageGroupsResponse
     */
    public function listModelPackageGroups(ListModelPackageGroupsRequest $args)
    {
        $result = parent::listModelPackageGroups($args->toArray());
        return new ListModelPackageGroupsResponse($result->toArray());
    }
}
