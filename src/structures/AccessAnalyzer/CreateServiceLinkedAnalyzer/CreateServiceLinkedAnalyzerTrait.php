<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateServiceLinkedAnalyzer;

trait CreateServiceLinkedAnalyzerTrait
{
    /**
     * @param CreateServiceLinkedAnalyzerRequest $args
     * @return CreateServiceLinkedAnalyzerResponse
     */
    public function createServiceLinkedAnalyzer(CreateServiceLinkedAnalyzerRequest $args)
    {
        $result = parent::createServiceLinkedAnalyzer($args->toArray());
        return new CreateServiceLinkedAnalyzerResponse($result->toArray());
    }
}
