<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListCloudFrontOriginAccessIdentities;

trait ListCloudFrontOriginAccessIdentitiesTrait
{
    /**
     * @param ListCloudFrontOriginAccessIdentitiesRequest $args
     * @return ListCloudFrontOriginAccessIdentitiesResponse
     */
    public function listCloudFrontOriginAccessIdentities(ListCloudFrontOriginAccessIdentitiesRequest $args)
    {
        $result = parent::listCloudFrontOriginAccessIdentities($args->toArray());
        return new ListCloudFrontOriginAccessIdentitiesResponse($result->toArray());
    }
}
