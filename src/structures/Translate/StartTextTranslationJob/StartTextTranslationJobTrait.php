<?php

namespace Sunaoka\Aws\Structures\Translate\StartTextTranslationJob;

trait StartTextTranslationJobTrait
{
    /**
     * @param StartTextTranslationJobRequest $args
     * @return StartTextTranslationJobResponse
     */
    public function startTextTranslationJob(StartTextTranslationJobRequest $args)
    {
        $result = parent::startTextTranslationJob($args->toArray());
        return new StartTextTranslationJobResponse($result->toArray());
    }
}
