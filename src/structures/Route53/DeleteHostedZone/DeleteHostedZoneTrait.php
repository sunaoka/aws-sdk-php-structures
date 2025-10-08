<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteHostedZone;

trait DeleteHostedZoneTrait
{
    /**
     * @param DeleteHostedZoneRequest $args
     * @return DeleteHostedZoneResponse
     */
    public function deleteHostedZone(DeleteHostedZoneRequest $args)
    {
        $result = parent::deleteHostedZone($args->toArray());
        return new DeleteHostedZoneResponse($result->toArray());
    }
}
