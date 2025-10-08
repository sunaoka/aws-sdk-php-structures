<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig;

trait UpdateParticipantRoleConfigTrait
{
    /**
     * @param UpdateParticipantRoleConfigRequest $args
     * @return UpdateParticipantRoleConfigResponse
     */
    public function updateParticipantRoleConfig(UpdateParticipantRoleConfigRequest $args)
    {
        $result = parent::updateParticipantRoleConfig($args->toArray());
        return new UpdateParticipantRoleConfigResponse($result->toArray());
    }
}
