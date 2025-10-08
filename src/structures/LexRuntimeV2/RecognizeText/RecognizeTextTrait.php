<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText;

trait RecognizeTextTrait
{
    /**
     * @param RecognizeTextRequest $args
     * @return RecognizeTextResponse
     */
    public function recognizeText(RecognizeTextRequest $args)
    {
        $result = parent::recognizeText($args->toArray());
        return new RecognizeTextResponse($result->toArray());
    }
}
