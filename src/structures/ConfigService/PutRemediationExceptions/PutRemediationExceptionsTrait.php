<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationExceptions;

trait PutRemediationExceptionsTrait
{
    /**
     * @param PutRemediationExceptionsRequest $args
     * @return PutRemediationExceptionsResponse
     */
    public function putRemediationExceptions(PutRemediationExceptionsRequest $args)
    {
        $result = parent::putRemediationExceptions($args->toArray());
        return new PutRemediationExceptionsResponse($result->toArray());
    }
}
