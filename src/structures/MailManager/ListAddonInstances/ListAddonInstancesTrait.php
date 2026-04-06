<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddonInstances;

trait ListAddonInstancesTrait
{
    /**
     * @param ListAddonInstancesRequest $args
     * @return ListAddonInstancesResponse
     */
    public function listAddonInstances(ListAddonInstancesRequest $args)
    {
        $result = parent::listAddonInstances($args->toArray());
        return new ListAddonInstancesResponse($result->toArray());
    }
}
