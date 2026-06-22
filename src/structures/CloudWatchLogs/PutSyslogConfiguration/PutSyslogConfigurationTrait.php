<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutSyslogConfiguration;

trait PutSyslogConfigurationTrait
{
    /**
     * @param PutSyslogConfigurationRequest $args
     * @return void
     */
    public function putSyslogConfiguration(PutSyslogConfigurationRequest $args)
    {
        parent::putSyslogConfiguration($args->toArray());
    }
}
