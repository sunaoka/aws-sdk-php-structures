<?php

namespace Sunaoka\Aws\Structures\Connect\ListAttachedFilesConfigurations;

trait ListAttachedFilesConfigurationsTrait
{
    /**
     * @param ListAttachedFilesConfigurationsRequest $args
     * @return ListAttachedFilesConfigurationsResponse
     */
    public function listAttachedFilesConfigurations(ListAttachedFilesConfigurationsRequest $args)
    {
        $result = parent::listAttachedFilesConfigurations($args->toArray());
        return new ListAttachedFilesConfigurationsResponse($result->toArray());
    }
}
