<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\RemoveTagsFromOnPremisesInstances;

trait RemoveTagsFromOnPremisesInstancesTrait
{
    /**
     * @param RemoveTagsFromOnPremisesInstancesRequest $args
     * @return void
     */
    public function removeTagsFromOnPremisesInstances(RemoveTagsFromOnPremisesInstancesRequest $args)
    {
        parent::removeTagsFromOnPremisesInstances($args->toArray());
    }
}
