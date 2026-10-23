<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateAttachmentNatConfiguration;

trait UpdateAttachmentNatConfigurationTrait
{
    /**
     * @param UpdateAttachmentNatConfigurationRequest $args
     * @return UpdateAttachmentNatConfigurationResponse
     */
    public function updateAttachmentNatConfiguration(UpdateAttachmentNatConfigurationRequest $args)
    {
        $result = parent::updateAttachmentNatConfiguration($args->toArray());
        return new UpdateAttachmentNatConfigurationResponse($result->toArray());
    }
}
