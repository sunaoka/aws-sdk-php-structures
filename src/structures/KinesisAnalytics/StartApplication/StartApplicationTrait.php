<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\StartApplication;

trait StartApplicationTrait
{
    /**
     * @param StartApplicationRequest $args
     * @return StartApplicationResponse
     */
    public function startApplication(StartApplicationRequest $args)
    {
        $result = parent::startApplication($args->toArray());
        return new StartApplicationResponse($result->toArray());
    }
}
