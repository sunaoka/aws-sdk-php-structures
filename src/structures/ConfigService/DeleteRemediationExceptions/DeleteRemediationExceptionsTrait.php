<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRemediationExceptions;

trait DeleteRemediationExceptionsTrait
{
    /**
     * @param DeleteRemediationExceptionsRequest $args
     * @return DeleteRemediationExceptionsResponse
     */
    public function deleteRemediationExceptions(DeleteRemediationExceptionsRequest $args)
    {
        $result = parent::deleteRemediationExceptions($args->toArray());
        return new DeleteRemediationExceptionsResponse($result->toArray());
    }
}
