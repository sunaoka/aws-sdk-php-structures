<?php

namespace Sunaoka\Aws\Structures\Synthetics\DeleteCanary;

trait DeleteCanaryTrait
{
    /**
     * @param DeleteCanaryRequest $args
     * @return DeleteCanaryResponse
     */
    public function deleteCanary(DeleteCanaryRequest $args)
    {
        $result = parent::deleteCanary($args->toArray());
        return new DeleteCanaryResponse($result->toArray());
    }
}
