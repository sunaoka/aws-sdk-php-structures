<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowName;

trait UpdateContactFlowNameTrait
{
    /**
     * @param UpdateContactFlowNameRequest $args
     * @return UpdateContactFlowNameResponse
     */
    public function updateContactFlowName(UpdateContactFlowNameRequest $args)
    {
        $result = parent::updateContactFlowName($args->toArray());
        return new UpdateContactFlowNameResponse($result->toArray());
    }
}
