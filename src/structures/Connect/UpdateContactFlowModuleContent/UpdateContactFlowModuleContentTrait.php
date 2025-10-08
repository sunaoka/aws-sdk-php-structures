<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowModuleContent;

trait UpdateContactFlowModuleContentTrait
{
    /**
     * @param UpdateContactFlowModuleContentRequest $args
     * @return UpdateContactFlowModuleContentResponse
     */
    public function updateContactFlowModuleContent(UpdateContactFlowModuleContentRequest $args)
    {
        $result = parent::updateContactFlowModuleContent($args->toArray());
        return new UpdateContactFlowModuleContentResponse($result->toArray());
    }
}
