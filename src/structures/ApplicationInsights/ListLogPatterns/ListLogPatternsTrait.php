<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListLogPatterns;

trait ListLogPatternsTrait
{
    /**
     * @param ListLogPatternsRequest $args
     * @return ListLogPatternsResponse
     */
    public function listLogPatterns(ListLogPatternsRequest $args)
    {
        $result = parent::listLogPatterns($args->toArray());
        return new ListLogPatternsResponse($result->toArray());
    }
}
