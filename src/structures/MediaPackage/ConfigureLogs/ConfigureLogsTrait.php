<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ConfigureLogs;

trait ConfigureLogsTrait
{
    /**
     * @param ConfigureLogsRequest $args
     * @return ConfigureLogsResponse
     */
    public function configureLogs(ConfigureLogsRequest $args)
    {
        $result = parent::configureLogs($args->toArray());
        return new ConfigureLogsResponse($result->toArray());
    }
}
