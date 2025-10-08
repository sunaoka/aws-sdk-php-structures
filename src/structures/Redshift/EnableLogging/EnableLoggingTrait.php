<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableLogging;

trait EnableLoggingTrait
{
    /**
     * @param EnableLoggingRequest $args
     * @return EnableLoggingResponse
     */
    public function enableLogging(EnableLoggingRequest $args)
    {
        $result = parent::enableLogging($args->toArray());
        return new EnableLoggingResponse($result->toArray());
    }
}
