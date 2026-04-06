<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowVersion;

trait CreateContactFlowVersionTrait
{
    /**
     * @param CreateContactFlowVersionRequest $args
     * @return CreateContactFlowVersionResponse
     */
    public function createContactFlowVersion(CreateContactFlowVersionRequest $args)
    {
        $result = parent::createContactFlowVersion($args->toArray());
        return new CreateContactFlowVersionResponse($result->toArray());
    }
}
