<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteFleetAdvisorCollector;

trait DeleteFleetAdvisorCollectorTrait
{
    /**
     * @param DeleteFleetAdvisorCollectorRequest $args
     * @return void
     */
    public function deleteFleetAdvisorCollector(DeleteFleetAdvisorCollectorRequest $args)
    {
        parent::deleteFleetAdvisorCollector($args->toArray());
    }
}
