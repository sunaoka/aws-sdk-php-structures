<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeleteAnalyzer;

trait DeleteAnalyzerTrait
{
    /**
     * @param DeleteAnalyzerRequest $args
     * @return void
     */
    public function deleteAnalyzer(DeleteAnalyzerRequest $args)
    {
        parent::deleteAnalyzer($args->toArray());
    }
}
