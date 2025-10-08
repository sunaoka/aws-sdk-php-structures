<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSyntax;

trait DetectSyntaxTrait
{
    /**
     * @param DetectSyntaxRequest $args
     * @return DetectSyntaxResponse
     */
    public function detectSyntax(DetectSyntaxRequest $args)
    {
        $result = parent::detectSyntax($args->toArray());
        return new DetectSyntaxResponse($result->toArray());
    }
}
