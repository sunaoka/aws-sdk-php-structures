<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeleteServiceLinkedAnalyzer;

trait DeleteServiceLinkedAnalyzerTrait
{
    /**
     * @param DeleteServiceLinkedAnalyzerRequest $args
     * @return void
     */
    public function deleteServiceLinkedAnalyzer(DeleteServiceLinkedAnalyzerRequest $args)
    {
        parent::deleteServiceLinkedAnalyzer($args->toArray());
    }
}
