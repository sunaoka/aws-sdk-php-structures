<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\UpdateAnalyzer;

trait UpdateAnalyzerTrait
{
    /**
     * @param UpdateAnalyzerRequest $args
     * @return UpdateAnalyzerResponse
     */
    public function updateAnalyzer(UpdateAnalyzerRequest $args)
    {
        $result = parent::updateAnalyzer($args->toArray());
        return new UpdateAnalyzerResponse($result->toArray());
    }
}
