<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteDictionary;

trait DeleteDictionaryTrait
{
    /**
     * @param DeleteDictionaryRequest $args
     * @return DeleteDictionaryResponse
     */
    public function deleteDictionary(DeleteDictionaryRequest $args)
    {
        $result = parent::deleteDictionary($args->toArray());
        return new DeleteDictionaryResponse($result->toArray());
    }
}
