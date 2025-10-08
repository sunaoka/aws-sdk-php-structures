<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\CreateLogPattern;

trait CreateLogPatternTrait
{
    /**
     * @param CreateLogPatternRequest $args
     * @return CreateLogPatternResponse
     */
    public function createLogPattern(CreateLogPatternRequest $args)
    {
        $result = parent::createLogPattern($args->toArray());
        return new CreateLogPatternResponse($result->toArray());
    }
}
