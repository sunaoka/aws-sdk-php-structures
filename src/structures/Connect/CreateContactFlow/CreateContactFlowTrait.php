<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlow;

trait CreateContactFlowTrait
{
    /**
     * @param CreateContactFlowRequest $args
     * @return CreateContactFlowResponse
     */
    public function createContactFlow(CreateContactFlowRequest $args)
    {
        $result = parent::createContactFlow($args->toArray());
        return new CreateContactFlowResponse($result->toArray());
    }
}
