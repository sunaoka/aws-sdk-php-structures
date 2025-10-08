<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DeleteLogPattern;

trait DeleteLogPatternTrait
{
    /**
     * @param DeleteLogPatternRequest $args
     * @return DeleteLogPatternResponse
     */
    public function deleteLogPattern(DeleteLogPatternRequest $args)
    {
        $result = parent::deleteLogPattern($args->toArray());
        return new DeleteLogPatternResponse($result->toArray());
    }
}
