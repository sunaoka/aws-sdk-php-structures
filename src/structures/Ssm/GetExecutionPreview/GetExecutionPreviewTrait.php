<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview;

trait GetExecutionPreviewTrait
{
    /**
     * @param GetExecutionPreviewRequest $args
     * @return GetExecutionPreviewResponse
     */
    public function getExecutionPreview(GetExecutionPreviewRequest $args)
    {
        $result = parent::getExecutionPreview($args->toArray());
        return new GetExecutionPreviewResponse($result->toArray());
    }
}
