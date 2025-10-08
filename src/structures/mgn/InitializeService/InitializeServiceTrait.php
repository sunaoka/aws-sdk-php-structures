<?php

namespace Sunaoka\Aws\Structures\mgn\InitializeService;

trait InitializeServiceTrait
{
    /**
     * @param InitializeServiceRequest $args
     * @return InitializeServiceResponse
     */
    public function initializeService(InitializeServiceRequest $args)
    {
        $result = parent::initializeService($args->toArray());
        return new InitializeServiceResponse($result->toArray());
    }
}
