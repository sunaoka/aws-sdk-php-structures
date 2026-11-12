<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetMergeCasesStatus;

trait GetMergeCasesStatusTrait
{
    /**
     * @param GetMergeCasesStatusRequest $args
     * @return GetMergeCasesStatusResponse
     */
    public function getMergeCasesStatus(GetMergeCasesStatusRequest $args)
    {
        $result = parent::getMergeCasesStatus($args->toArray());
        return new GetMergeCasesStatusResponse($result->toArray());
    }
}
