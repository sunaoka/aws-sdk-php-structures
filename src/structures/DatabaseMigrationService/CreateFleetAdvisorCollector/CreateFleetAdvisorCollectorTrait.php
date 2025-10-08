<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateFleetAdvisorCollector;

trait CreateFleetAdvisorCollectorTrait
{
    /**
     * @param CreateFleetAdvisorCollectorRequest $args
     * @return CreateFleetAdvisorCollectorResponse
     */
    public function createFleetAdvisorCollector(CreateFleetAdvisorCollectorRequest $args)
    {
        $result = parent::createFleetAdvisorCollector($args->toArray());
        return new CreateFleetAdvisorCollectorResponse($result->toArray());
    }
}
