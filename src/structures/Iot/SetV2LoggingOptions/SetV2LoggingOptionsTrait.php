<?php

namespace Sunaoka\Aws\Structures\Iot\SetV2LoggingOptions;

trait SetV2LoggingOptionsTrait
{
    /**
     * @param SetV2LoggingOptionsRequest $args
     * @return void
     */
    public function setV2LoggingOptions(SetV2LoggingOptionsRequest $args)
    {
        parent::setV2LoggingOptions($args->toArray());
    }
}
