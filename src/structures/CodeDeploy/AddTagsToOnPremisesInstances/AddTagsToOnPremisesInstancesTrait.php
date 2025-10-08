<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\AddTagsToOnPremisesInstances;

trait AddTagsToOnPremisesInstancesTrait
{
    /**
     * @param AddTagsToOnPremisesInstancesRequest $args
     * @return void
     */
    public function addTagsToOnPremisesInstances(AddTagsToOnPremisesInstancesRequest $args)
    {
        parent::addTagsToOnPremisesInstances($args->toArray());
    }
}
