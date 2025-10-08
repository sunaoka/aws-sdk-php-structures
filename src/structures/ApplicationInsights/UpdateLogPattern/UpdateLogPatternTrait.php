<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateLogPattern;

trait UpdateLogPatternTrait
{
    /**
     * @param UpdateLogPatternRequest $args
     * @return UpdateLogPatternResponse
     */
    public function updateLogPattern(UpdateLogPatternRequest $args)
    {
        $result = parent::updateLogPattern($args->toArray());
        return new UpdateLogPatternResponse($result->toArray());
    }
}
