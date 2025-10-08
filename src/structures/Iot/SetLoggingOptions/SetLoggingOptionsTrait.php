<?php

namespace Sunaoka\Aws\Structures\Iot\SetLoggingOptions;

trait SetLoggingOptionsTrait
{
    /**
     * @param SetLoggingOptionsRequest $args
     * @return void
     */
    public function setLoggingOptions(SetLoggingOptionsRequest $args)
    {
        parent::setLoggingOptions($args->toArray());
    }
}
