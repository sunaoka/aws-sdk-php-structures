<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowContent;

trait UpdateContactFlowContentTrait
{
    /**
     * @param UpdateContactFlowContentRequest $args
     * @return UpdateContactFlowContentResponse
     */
    public function updateContactFlowContent(UpdateContactFlowContentRequest $args)
    {
        $result = parent::updateContactFlowContent($args->toArray());
        return new UpdateContactFlowContentResponse($result->toArray());
    }
}
