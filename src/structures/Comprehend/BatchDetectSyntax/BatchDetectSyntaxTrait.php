<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSyntax;

trait BatchDetectSyntaxTrait
{
    /**
     * @param BatchDetectSyntaxRequest $args
     * @return BatchDetectSyntaxResponse
     */
    public function batchDetectSyntax(BatchDetectSyntaxRequest $args)
    {
        $result = parent::batchDetectSyntax($args->toArray());
        return new BatchDetectSyntaxResponse($result->toArray());
    }
}
