<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteV2LoggingLevel;

trait DeleteV2LoggingLevelTrait
{
    /**
     * @param DeleteV2LoggingLevelRequest $args
     * @return void
     */
    public function deleteV2LoggingLevel(DeleteV2LoggingLevelRequest $args)
    {
        parent::deleteV2LoggingLevel($args->toArray());
    }
}
