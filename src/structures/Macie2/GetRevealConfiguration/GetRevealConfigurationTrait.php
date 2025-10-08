<?php

namespace Sunaoka\Aws\Structures\Macie2\GetRevealConfiguration;

trait GetRevealConfigurationTrait
{
    /**
     * @param GetRevealConfigurationRequest $args
     * @return GetRevealConfigurationResponse
     */
    public function getRevealConfiguration(GetRevealConfigurationRequest $args)
    {
        $result = parent::getRevealConfiguration($args->toArray());
        return new GetRevealConfigurationResponse($result->toArray());
    }
}
