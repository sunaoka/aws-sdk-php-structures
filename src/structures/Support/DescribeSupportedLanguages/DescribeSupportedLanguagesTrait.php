<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSupportedLanguages;

trait DescribeSupportedLanguagesTrait
{
    /**
     * @param DescribeSupportedLanguagesRequest $args
     * @return DescribeSupportedLanguagesResponse
     */
    public function describeSupportedLanguages(DescribeSupportedLanguagesRequest $args)
    {
        $result = parent::describeSupportedLanguages($args->toArray());
        return new DescribeSupportedLanguagesResponse($result->toArray());
    }
}
