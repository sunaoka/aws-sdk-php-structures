<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifierSummaries;

trait ListDocumentClassifierSummariesTrait
{
    /**
     * @param ListDocumentClassifierSummariesRequest $args
     * @return ListDocumentClassifierSummariesResponse
     */
    public function listDocumentClassifierSummaries(ListDocumentClassifierSummariesRequest $args)
    {
        $result = parent::listDocumentClassifierSummaries($args->toArray());
        return new ListDocumentClassifierSummariesResponse($result->toArray());
    }
}
