<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCommunications;

trait DescribeCommunicationsTrait
{
    /**
     * @param DescribeCommunicationsRequest $args
     * @return DescribeCommunicationsResponse
     */
    public function describeCommunications(DescribeCommunicationsRequest $args)
    {
        $result = parent::describeCommunications($args->toArray());
        return new DescribeCommunicationsResponse($result->toArray());
    }
}
