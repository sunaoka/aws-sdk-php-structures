<?php

namespace Sunaoka\Aws\Structures\Ssm\StartExecutionPreview;

trait StartExecutionPreviewTrait
{
    /**
     * @param StartExecutionPreviewRequest $args
     * @return StartExecutionPreviewResponse
     */
    public function startExecutionPreview(StartExecutionPreviewRequest $args)
    {
        $result = parent::startExecutionPreview($args->toArray());
        return new StartExecutionPreviewResponse($result->toArray());
    }
}
