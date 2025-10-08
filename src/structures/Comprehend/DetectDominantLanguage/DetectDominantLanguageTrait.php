<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectDominantLanguage;

trait DetectDominantLanguageTrait
{
    /**
     * @param DetectDominantLanguageRequest $args
     * @return DetectDominantLanguageResponse
     */
    public function detectDominantLanguage(DetectDominantLanguageRequest $args)
    {
        $result = parent::detectDominantLanguage($args->toArray());
        return new DetectDominantLanguageResponse($result->toArray());
    }
}
