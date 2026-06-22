<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteSyslogConfiguration;

trait DeleteSyslogConfigurationTrait
{
    /**
     * @param DeleteSyslogConfigurationRequest $args
     * @return void
     */
    public function deleteSyslogConfiguration(DeleteSyslogConfigurationRequest $args)
    {
        parent::deleteSyslogConfiguration($args->toArray());
    }
}
