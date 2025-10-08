<?php

namespace Sunaoka\Aws\Structures\Macie2\PutFindingsPublicationConfiguration;

trait PutFindingsPublicationConfigurationTrait
{
    /**
     * @param PutFindingsPublicationConfigurationRequest $args
     * @return PutFindingsPublicationConfigurationResponse
     */
    public function putFindingsPublicationConfiguration(PutFindingsPublicationConfigurationRequest $args)
    {
        $result = parent::putFindingsPublicationConfiguration($args->toArray());
        return new PutFindingsPublicationConfigurationResponse($result->toArray());
    }
}
