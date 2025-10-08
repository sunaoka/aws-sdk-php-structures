<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AssociateWorkspaceApplication;

trait AssociateWorkspaceApplicationTrait
{
    /**
     * @param AssociateWorkspaceApplicationRequest $args
     * @return AssociateWorkspaceApplicationResponse
     */
    public function associateWorkspaceApplication(AssociateWorkspaceApplicationRequest $args)
    {
        $result = parent::associateWorkspaceApplication($args->toArray());
        return new AssociateWorkspaceApplicationResponse($result->toArray());
    }
}
