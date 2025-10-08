<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateReadinessCheck;

trait CreateReadinessCheckTrait
{
    /**
     * @param CreateReadinessCheckRequest $args
     * @return CreateReadinessCheckResponse
     */
    public function createReadinessCheck(CreateReadinessCheckRequest $args)
    {
        $result = parent::createReadinessCheck($args->toArray());
        return new CreateReadinessCheckResponse($result->toArray());
    }
}
