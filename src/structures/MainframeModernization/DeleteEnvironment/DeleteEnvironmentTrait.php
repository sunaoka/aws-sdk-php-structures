<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\DeleteEnvironment;

trait DeleteEnvironmentTrait
{
    /**
     * @param DeleteEnvironmentRequest $args
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironment(DeleteEnvironmentRequest $args)
    {
        $result = parent::deleteEnvironment($args->toArray());
        return new DeleteEnvironmentResponse($result->toArray());
    }
}
