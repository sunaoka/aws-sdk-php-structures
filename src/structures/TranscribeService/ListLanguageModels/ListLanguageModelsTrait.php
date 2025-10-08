<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListLanguageModels;

trait ListLanguageModelsTrait
{
    /**
     * @param ListLanguageModelsRequest $args
     * @return ListLanguageModelsResponse
     */
    public function listLanguageModels(ListLanguageModelsRequest $args)
    {
        $result = parent::listLanguageModels($args->toArray());
        return new ListLanguageModelsResponse($result->toArray());
    }
}
