<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingsPublicationConfiguration;

trait GetFindingsPublicationConfigurationTrait
{
    /**
     * @param GetFindingsPublicationConfigurationRequest $args
     * @return GetFindingsPublicationConfigurationResponse
     */
    public function getFindingsPublicationConfiguration(GetFindingsPublicationConfigurationRequest $args)
    {
        $result = parent::getFindingsPublicationConfiguration($args->toArray());
        return new GetFindingsPublicationConfigurationResponse($result->toArray());
    }
}
