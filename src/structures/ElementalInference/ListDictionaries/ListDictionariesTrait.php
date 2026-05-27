<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListDictionaries;

trait ListDictionariesTrait
{
    /**
     * @param ListDictionariesRequest $args
     * @return ListDictionariesResponse
     */
    public function listDictionaries(ListDictionariesRequest $args)
    {
        $result = parent::listDictionaries($args->toArray());
        return new ListDictionariesResponse($result->toArray());
    }
}
