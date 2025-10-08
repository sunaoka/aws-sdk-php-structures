<?php

namespace Sunaoka\Aws\Structures\Iot\ListV2LoggingLevels;

trait ListV2LoggingLevelsTrait
{
    /**
     * @param ListV2LoggingLevelsRequest $args
     * @return ListV2LoggingLevelsResponse
     */
    public function listV2LoggingLevels(ListV2LoggingLevelsRequest $args)
    {
        $result = parent::listV2LoggingLevels($args->toArray());
        return new ListV2LoggingLevelsResponse($result->toArray());
    }
}
