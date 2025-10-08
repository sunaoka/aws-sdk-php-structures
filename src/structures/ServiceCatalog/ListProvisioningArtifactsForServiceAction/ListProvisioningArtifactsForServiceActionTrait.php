<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisioningArtifactsForServiceAction;

trait ListProvisioningArtifactsForServiceActionTrait
{
    /**
     * @param ListProvisioningArtifactsForServiceActionRequest $args
     * @return ListProvisioningArtifactsForServiceActionResponse
     */
    public function listProvisioningArtifactsForServiceAction(ListProvisioningArtifactsForServiceActionRequest $args)
    {
        $result = parent::listProvisioningArtifactsForServiceAction($args->toArray());
        return new ListProvisioningArtifactsForServiceActionResponse($result->toArray());
    }
}
