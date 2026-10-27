<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateFailoverSlateConfiguration;

trait UpdateFailoverSlateConfigurationTrait
{
    /**
     * @param UpdateFailoverSlateConfigurationRequest $args
     * @return UpdateFailoverSlateConfigurationResponse
     */
    public function updateFailoverSlateConfiguration(UpdateFailoverSlateConfigurationRequest $args)
    {
        $result = parent::updateFailoverSlateConfiguration($args->toArray());
        return new UpdateFailoverSlateConfigurationResponse($result->toArray());
    }
}
