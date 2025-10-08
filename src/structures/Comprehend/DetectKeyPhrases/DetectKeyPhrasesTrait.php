<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectKeyPhrases;

trait DetectKeyPhrasesTrait
{
    /**
     * @param DetectKeyPhrasesRequest $args
     * @return DetectKeyPhrasesResponse
     */
    public function detectKeyPhrases(DetectKeyPhrasesRequest $args)
    {
        $result = parent::detectKeyPhrases($args->toArray());
        return new DetectKeyPhrasesResponse($result->toArray());
    }
}
