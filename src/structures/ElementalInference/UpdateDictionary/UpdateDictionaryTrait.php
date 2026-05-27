<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateDictionary;

trait UpdateDictionaryTrait
{
    /**
     * @param UpdateDictionaryRequest $args
     * @return UpdateDictionaryResponse
     */
    public function updateDictionary(UpdateDictionaryRequest $args)
    {
        $result = parent::updateDictionary($args->toArray());
        return new UpdateDictionaryResponse($result->toArray());
    }
}
