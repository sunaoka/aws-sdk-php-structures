<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzers;

trait ListAnalyzersTrait
{
    /**
     * @param ListAnalyzersRequest $args
     * @return ListAnalyzersResponse
     */
    public function listAnalyzers(ListAnalyzersRequest $args)
    {
        $result = parent::listAnalyzers($args->toArray());
        return new ListAnalyzersResponse($result->toArray());
    }
}
