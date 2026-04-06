<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant;

trait InvokeAssistantTrait
{
    /**
     * @param InvokeAssistantRequest $args
     * @return InvokeAssistantResponse
     */
    public function invokeAssistant(InvokeAssistantRequest $args)
    {
        $result = parent::invokeAssistant($args->toArray());
        return new InvokeAssistantResponse($result->toArray());
    }
}
