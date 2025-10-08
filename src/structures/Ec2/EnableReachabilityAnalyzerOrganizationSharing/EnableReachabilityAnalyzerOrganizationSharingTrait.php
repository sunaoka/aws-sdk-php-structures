<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableReachabilityAnalyzerOrganizationSharing;

trait EnableReachabilityAnalyzerOrganizationSharingTrait
{
    /**
     * @param EnableReachabilityAnalyzerOrganizationSharingRequest $args
     * @return EnableReachabilityAnalyzerOrganizationSharingResponse
     */
    public function enableReachabilityAnalyzerOrganizationSharing(EnableReachabilityAnalyzerOrganizationSharingRequest $args)
    {
        $result = parent::enableReachabilityAnalyzerOrganizationSharing($args->toArray());
        return new EnableReachabilityAnalyzerOrganizationSharingResponse($result->toArray());
    }
}
