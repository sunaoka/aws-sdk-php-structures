<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableLogging;

trait DisableLoggingTrait
{
    /**
     * @param DisableLoggingRequest $args
     * @return DisableLoggingResponse
     */
    public function disableLogging(DisableLoggingRequest $args)
    {
        $result = parent::disableLogging($args->toArray());
        return new DisableLoggingResponse($result->toArray());
    }
}
