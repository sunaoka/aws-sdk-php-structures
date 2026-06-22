<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListSyslogConfigurations;

trait ListSyslogConfigurationsTrait
{
    /**
     * @param ListSyslogConfigurationsRequest $args
     * @return ListSyslogConfigurationsResponse
     */
    public function listSyslogConfigurations(ListSyslogConfigurationsRequest $args)
    {
        $result = parent::listSyslogConfigurations($args->toArray());
        return new ListSyslogConfigurationsResponse($result->toArray());
    }
}
