<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetBulkPublishDetails;

trait GetBulkPublishDetailsTrait
{
    /**
     * @param GetBulkPublishDetailsRequest $args
     * @return GetBulkPublishDetailsResponse
     */
    public function getBulkPublishDetails(GetBulkPublishDetailsRequest $args)
    {
        $result = parent::getBulkPublishDetails($args->toArray());
        return new GetBulkPublishDetailsResponse($result->toArray());
    }
}
