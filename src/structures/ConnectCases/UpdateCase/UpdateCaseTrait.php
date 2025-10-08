<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCase;

trait UpdateCaseTrait
{
    /**
     * @param UpdateCaseRequest $args
     * @return UpdateCaseResponse
     */
    public function updateCase(UpdateCaseRequest $args)
    {
        $result = parent::updateCase($args->toArray());
        return new UpdateCaseResponse($result->toArray());
    }
}
