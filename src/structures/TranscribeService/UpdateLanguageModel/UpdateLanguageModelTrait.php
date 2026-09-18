<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateLanguageModel;

trait UpdateLanguageModelTrait
{
    /**
     * @param UpdateLanguageModelRequest $args
     * @return UpdateLanguageModelResponse
     */
    public function updateLanguageModel(UpdateLanguageModelRequest $args)
    {
        $result = parent::updateLanguageModel($args->toArray());
        return new UpdateLanguageModelResponse($result->toArray());
    }
}
