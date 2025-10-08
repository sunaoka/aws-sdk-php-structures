<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectKeyPhrases;

trait BatchDetectKeyPhrasesTrait
{
    /**
     * @param BatchDetectKeyPhrasesRequest $args
     * @return BatchDetectKeyPhrasesResponse
     */
    public function batchDetectKeyPhrases(BatchDetectKeyPhrasesRequest $args)
    {
        $result = parent::batchDetectKeyPhrases($args->toArray());
        return new BatchDetectKeyPhrasesResponse($result->toArray());
    }
}
