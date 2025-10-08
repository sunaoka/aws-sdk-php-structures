<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateLimit;

trait CreateLimitTrait
{
    /**
     * @param CreateLimitRequest $args
     * @return CreateLimitResponse
     */
    public function createLimit(CreateLimitRequest $args)
    {
        $result = parent::createLimit($args->toArray());
        return new CreateLimitResponse($result->toArray());
    }
}
