<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\CreateSupportCase;

trait CreateSupportCaseTrait
{
    /**
     * @param CreateSupportCaseRequest $args
     * @return CreateSupportCaseResponse
     */
    public function createSupportCase(CreateSupportCaseRequest $args)
    {
        $result = parent::createSupportCase($args->toArray());
        return new CreateSupportCaseResponse($result->toArray());
    }
}
