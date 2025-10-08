<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLegalHold;

trait CreateLegalHoldTrait
{
    /**
     * @param CreateLegalHoldRequest $args
     * @return CreateLegalHoldResponse
     */
    public function createLegalHold(CreateLegalHoldRequest $args)
    {
        $result = parent::createLegalHold($args->toArray());
        return new CreateLegalHoldResponse($result->toArray());
    }
}
