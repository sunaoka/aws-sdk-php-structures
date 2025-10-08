<?php

namespace Sunaoka\Aws\Structures\Translate\StopTextTranslationJob;

trait StopTextTranslationJobTrait
{
    /**
     * @param StopTextTranslationJobRequest $args
     * @return StopTextTranslationJobResponse
     */
    public function stopTextTranslationJob(StopTextTranslationJobRequest $args)
    {
        $result = parent::stopTextTranslationJob($args->toArray());
        return new StopTextTranslationJobResponse($result->toArray());
    }
}
