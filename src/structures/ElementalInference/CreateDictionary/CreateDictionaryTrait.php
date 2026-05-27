<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateDictionary;

trait CreateDictionaryTrait
{
    /**
     * @param CreateDictionaryRequest $args
     * @return CreateDictionaryResponse
     */
    public function createDictionary(CreateDictionaryRequest $args)
    {
        $result = parent::createDictionary($args->toArray());
        return new CreateDictionaryResponse($result->toArray());
    }
}
