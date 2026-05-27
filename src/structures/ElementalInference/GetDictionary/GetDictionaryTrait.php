<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetDictionary;

trait GetDictionaryTrait
{
    /**
     * @param GetDictionaryRequest $args
     * @return GetDictionaryResponse
     */
    public function getDictionary(GetDictionaryRequest $args)
    {
        $result = parent::getDictionary($args->toArray());
        return new GetDictionaryResponse($result->toArray());
    }
}
