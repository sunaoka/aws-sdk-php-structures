<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateHubContent;

trait UpdateHubContentTrait
{
    /**
     * @param UpdateHubContentRequest $args
     * @return UpdateHubContentResponse
     */
    public function updateHubContent(UpdateHubContentRequest $args)
    {
        $result = parent::updateHubContent($args->toArray());
        return new UpdateHubContentResponse($result->toArray());
    }
}
