<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteEnvironmentBlueprint;

trait DeleteEnvironmentBlueprintTrait
{
    /**
     * @param DeleteEnvironmentBlueprintRequest $args
     * @return void
     */
    public function deleteEnvironmentBlueprint(DeleteEnvironmentBlueprintRequest $args)
    {
        parent::deleteEnvironmentBlueprint($args->toArray());
    }
}
