<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateText;

trait TranslateTextTrait
{
    /**
     * @param TranslateTextRequest $args
     * @return TranslateTextResponse
     */
    public function translateText(TranslateTextRequest $args)
    {
        $result = parent::translateText($args->toArray());
        return new TranslateTextResponse($result->toArray());
    }
}
