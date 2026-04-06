<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlowVersion;

trait DeleteContactFlowVersionTrait
{
    /**
     * @param DeleteContactFlowVersionRequest $args
     * @return DeleteContactFlowVersionResponse
     */
    public function deleteContactFlowVersion(DeleteContactFlowVersionRequest $args)
    {
        $result = parent::deleteContactFlowVersion($args->toArray());
        return new DeleteContactFlowVersionResponse($result->toArray());
    }
}
