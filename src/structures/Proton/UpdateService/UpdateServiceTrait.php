<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateService;

trait UpdateServiceTrait
{
    /**
     * @param UpdateServiceRequest $args
     * @return UpdateServiceResponse
     */
    public function updateService(UpdateServiceRequest $args)
    {
        $result = parent::updateService($args->toArray());
        return new UpdateServiceResponse($result->toArray());
    }
}
