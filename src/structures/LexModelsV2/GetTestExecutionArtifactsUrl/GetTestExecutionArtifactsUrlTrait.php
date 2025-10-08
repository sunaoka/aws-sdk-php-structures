<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\GetTestExecutionArtifactsUrl;

trait GetTestExecutionArtifactsUrlTrait
{
    /**
     * @param GetTestExecutionArtifactsUrlRequest $args
     * @return GetTestExecutionArtifactsUrlResponse
     */
    public function getTestExecutionArtifactsUrl(GetTestExecutionArtifactsUrlRequest $args)
    {
        $result = parent::getTestExecutionArtifactsUrl($args->toArray());
        return new GetTestExecutionArtifactsUrlResponse($result->toArray());
    }
}
