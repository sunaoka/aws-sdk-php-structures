<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateAuditStreamConfiguration;

trait UpdateAuditStreamConfigurationTrait
{
    /**
     * @param UpdateAuditStreamConfigurationRequest $args
     * @return UpdateAuditStreamConfigurationResponse
     */
    public function updateAuditStreamConfiguration(UpdateAuditStreamConfigurationRequest $args)
    {
        $result = parent::updateAuditStreamConfiguration($args->toArray());
        return new UpdateAuditStreamConfigurationResponse($result->toArray());
    }
}
