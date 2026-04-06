<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectToxicContent;

trait DetectToxicContentTrait
{
    /**
     * @param DetectToxicContentRequest $args
     * @return DetectToxicContentResponse
     */
    public function detectToxicContent(DetectToxicContentRequest $args)
    {
        $result = parent::detectToxicContent($args->toArray());
        return new DetectToxicContentResponse($result->toArray());
    }
}
