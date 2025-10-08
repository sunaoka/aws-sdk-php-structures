<?php

namespace Sunaoka\Aws\Structures\Amplify\ListWebhooks;

trait ListWebhooksTrait
{
    /**
     * @param ListWebhooksRequest $args
     * @return ListWebhooksResponse
     */
    public function listWebhooks(ListWebhooksRequest $args)
    {
        $result = parent::listWebhooks($args->toArray());
        return new ListWebhooksResponse($result->toArray());
    }
}
