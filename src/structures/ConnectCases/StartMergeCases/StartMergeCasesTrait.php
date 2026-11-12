<?php

namespace Sunaoka\Aws\Structures\ConnectCases\StartMergeCases;

trait StartMergeCasesTrait
{
    /**
     * @param StartMergeCasesRequest $args
     * @return StartMergeCasesResponse
     */
    public function startMergeCases(StartMergeCasesRequest $args)
    {
        $result = parent::startMergeCases($args->toArray());
        return new StartMergeCasesResponse($result->toArray());
    }
}
