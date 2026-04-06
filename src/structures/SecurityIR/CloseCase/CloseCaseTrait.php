<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CloseCase;

trait CloseCaseTrait
{
    /**
     * @param CloseCaseRequest $args
     * @return CloseCaseResponse
     */
    public function closeCase(CloseCaseRequest $args)
    {
        $result = parent::closeCase($args->toArray());
        return new CloseCaseResponse($result->toArray());
    }
}
