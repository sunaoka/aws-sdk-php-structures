<?php

namespace Sunaoka\Aws\Structures\Translate\ListLanguages;

trait ListLanguagesTrait
{
    /**
     * @param ListLanguagesRequest $args
     * @return ListLanguagesResponse
     */
    public function listLanguages(ListLanguagesRequest $args)
    {
        $result = parent::listLanguages($args->toArray());
        return new ListLanguagesResponse($result->toArray());
    }
}
