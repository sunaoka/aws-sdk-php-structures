<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectText;

trait DetectTextTrait
{
    /**
     * @param DetectTextRequest $args
     * @return DetectTextResponse
     */
    public function detectText(DetectTextRequest $args)
    {
        $result = parent::detectText($args->toArray());
        return new DetectTextResponse($result->toArray());
    }
}
