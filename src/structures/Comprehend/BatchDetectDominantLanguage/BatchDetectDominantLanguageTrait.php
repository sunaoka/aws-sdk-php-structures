<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectDominantLanguage;

trait BatchDetectDominantLanguageTrait
{
    /**
     * @param BatchDetectDominantLanguageRequest $args
     * @return BatchDetectDominantLanguageResponse
     */
    public function batchDetectDominantLanguage(BatchDetectDominantLanguageRequest $args)
    {
        $result = parent::batchDetectDominantLanguage($args->toArray());
        return new BatchDetectDominantLanguageResponse($result->toArray());
    }
}
