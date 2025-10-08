<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAnalyzer;

trait CreateAnalyzerTrait
{
    /**
     * @param CreateAnalyzerRequest $args
     * @return CreateAnalyzerResponse
     */
    public function createAnalyzer(CreateAnalyzerRequest $args)
    {
        $result = parent::createAnalyzer($args->toArray());
        return new CreateAnalyzerResponse($result->toArray());
    }
}
