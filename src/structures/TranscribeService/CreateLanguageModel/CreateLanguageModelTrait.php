<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateLanguageModel;

trait CreateLanguageModelTrait
{
    /**
     * @param CreateLanguageModelRequest $args
     * @return CreateLanguageModelResponse
     */
    public function createLanguageModel(CreateLanguageModelRequest $args)
    {
        $result = parent::createLanguageModel($args->toArray());
        return new CreateLanguageModelResponse($result->toArray());
    }
}
