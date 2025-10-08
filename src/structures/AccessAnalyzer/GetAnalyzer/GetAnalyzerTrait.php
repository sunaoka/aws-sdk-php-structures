<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzer;

trait GetAnalyzerTrait
{
    /**
     * @param GetAnalyzerRequest $args
     * @return GetAnalyzerResponse
     */
    public function getAnalyzer(GetAnalyzerRequest $args)
    {
        $result = parent::getAnalyzer($args->toArray());
        return new GetAnalyzerResponse($result->toArray());
    }
}
