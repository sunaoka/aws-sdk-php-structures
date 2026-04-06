<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnectorGroup;

trait DeleteVoiceConnectorGroupTrait
{
    /**
     * @param DeleteVoiceConnectorGroupRequest $args
     * @return void
     */
    public function deleteVoiceConnectorGroup(DeleteVoiceConnectorGroupRequest $args)
    {
        parent::deleteVoiceConnectorGroup($args->toArray());
    }
}
