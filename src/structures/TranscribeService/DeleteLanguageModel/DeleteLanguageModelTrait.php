<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteLanguageModel;

trait DeleteLanguageModelTrait
{
    /**
     * @param DeleteLanguageModelRequest $args
     * @return void
     */
    public function deleteLanguageModel(DeleteLanguageModelRequest $args)
    {
        parent::deleteLanguageModel($args->toArray());
    }
}
