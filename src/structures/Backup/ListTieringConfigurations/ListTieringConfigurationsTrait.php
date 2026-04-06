<?php

namespace Sunaoka\Aws\Structures\Backup\ListTieringConfigurations;

trait ListTieringConfigurationsTrait
{
    /**
     * @param ListTieringConfigurationsRequest $args
     * @return ListTieringConfigurationsResponse
     */
    public function listTieringConfigurations(ListTieringConfigurationsRequest $args)
    {
        $result = parent::listTieringConfigurations($args->toArray());
        return new ListTieringConfigurationsResponse($result->toArray());
    }
}
