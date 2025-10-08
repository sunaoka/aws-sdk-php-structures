<?php

namespace Sunaoka\Aws\Structures\Iot\SetV2LoggingLevel;

trait SetV2LoggingLevelTrait
{
    /**
     * @param SetV2LoggingLevelRequest $args
     * @return void
     */
    public function setV2LoggingLevel(SetV2LoggingLevelRequest $args)
    {
        parent::setV2LoggingLevel($args->toArray());
    }
}
