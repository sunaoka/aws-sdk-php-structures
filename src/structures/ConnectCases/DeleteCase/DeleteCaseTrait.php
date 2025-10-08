<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteCase;

trait DeleteCaseTrait
{
    /**
     * @param DeleteCaseRequest $args
     * @return DeleteCaseResponse
     */
    public function deleteCase(DeleteCaseRequest $args)
    {
        $result = parent::deleteCase($args->toArray());
        return new DeleteCaseResponse($result->toArray());
    }
}
