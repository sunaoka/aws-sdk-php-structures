<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachmentNatConfigurations;

trait ListAttachmentNatConfigurationsTrait
{
    /**
     * @param ListAttachmentNatConfigurationsRequest $args
     * @return ListAttachmentNatConfigurationsResponse
     */
    public function listAttachmentNatConfigurations(ListAttachmentNatConfigurationsRequest $args)
    {
        $result = parent::listAttachmentNatConfigurations($args->toArray());
        return new ListAttachmentNatConfigurationsResponse($result->toArray());
    }
}
