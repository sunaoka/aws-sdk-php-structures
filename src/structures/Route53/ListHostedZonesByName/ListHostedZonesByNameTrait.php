<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByName;

trait ListHostedZonesByNameTrait
{
    /**
     * @param ListHostedZonesByNameRequest $args
     * @return ListHostedZonesByNameResponse
     */
    public function listHostedZonesByName(ListHostedZonesByNameRequest $args)
    {
        $result = parent::listHostedZonesByName($args->toArray());
        return new ListHostedZonesByNameResponse($result->toArray());
    }
}
