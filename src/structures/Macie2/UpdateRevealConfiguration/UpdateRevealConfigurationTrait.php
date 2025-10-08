<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateRevealConfiguration;

trait UpdateRevealConfigurationTrait
{
    /**
     * @param UpdateRevealConfigurationRequest $args
     * @return UpdateRevealConfigurationResponse
     */
    public function updateRevealConfiguration(UpdateRevealConfigurationRequest $args)
    {
        $result = parent::updateRevealConfiguration($args->toArray());
        return new UpdateRevealConfigurationResponse($result->toArray());
    }
}
