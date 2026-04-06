<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTpmEkPub;

trait GetInstanceTpmEkPubTrait
{
    /**
     * @param GetInstanceTpmEkPubRequest $args
     * @return GetInstanceTpmEkPubResponse
     */
    public function getInstanceTpmEkPub(GetInstanceTpmEkPubRequest $args)
    {
        $result = parent::getInstanceTpmEkPub($args->toArray());
        return new GetInstanceTpmEkPubResponse($result->toArray());
    }
}
