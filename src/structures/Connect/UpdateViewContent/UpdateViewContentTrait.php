<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateViewContent;

trait UpdateViewContentTrait
{
    /**
     * @param UpdateViewContentRequest $args
     * @return UpdateViewContentResponse
     */
    public function updateViewContent(UpdateViewContentRequest $args)
    {
        $result = parent::updateViewContent($args->toArray());
        return new UpdateViewContentResponse($result->toArray());
    }
}
