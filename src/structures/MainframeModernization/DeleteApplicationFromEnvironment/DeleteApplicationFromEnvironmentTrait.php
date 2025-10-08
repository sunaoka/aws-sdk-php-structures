<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\DeleteApplicationFromEnvironment;

trait DeleteApplicationFromEnvironmentTrait
{
    /**
     * @param DeleteApplicationFromEnvironmentRequest $args
     * @return DeleteApplicationFromEnvironmentResponse
     */
    public function deleteApplicationFromEnvironment(DeleteApplicationFromEnvironmentRequest $args)
    {
        $result = parent::deleteApplicationFromEnvironment($args->toArray());
        return new DeleteApplicationFromEnvironmentResponse($result->toArray());
    }
}
