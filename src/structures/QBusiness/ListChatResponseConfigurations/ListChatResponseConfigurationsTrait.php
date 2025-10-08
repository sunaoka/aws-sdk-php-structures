<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListChatResponseConfigurations;

trait ListChatResponseConfigurationsTrait
{
    /**
     * @param ListChatResponseConfigurationsRequest $args
     * @return ListChatResponseConfigurationsResponse
     */
    public function listChatResponseConfigurations(ListChatResponseConfigurationsRequest $args)
    {
        $result = parent::listChatResponseConfigurations($args->toArray());
        return new ListChatResponseConfigurationsResponse($result->toArray());
    }
}
