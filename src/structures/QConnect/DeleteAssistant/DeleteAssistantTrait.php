<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAssistant;

trait DeleteAssistantTrait
{
    /**
     * @param DeleteAssistantRequest $args
     * @return DeleteAssistantResponse
     */
    public function deleteAssistant(DeleteAssistantRequest $args)
    {
        $result = parent::deleteAssistant($args->toArray());
        return new DeleteAssistantResponse($result->toArray());
    }
}
