<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetCodeSnippet;

trait BatchGetCodeSnippetTrait
{
    /**
     * @param BatchGetCodeSnippetRequest $args
     * @return BatchGetCodeSnippetResponse
     */
    public function batchGetCodeSnippet(BatchGetCodeSnippetRequest $args)
    {
        $result = parent::batchGetCodeSnippet($args->toArray());
        return new BatchGetCodeSnippetResponse($result->toArray());
    }
}
