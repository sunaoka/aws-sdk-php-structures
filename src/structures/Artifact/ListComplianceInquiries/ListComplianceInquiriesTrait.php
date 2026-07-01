<?php

namespace Sunaoka\Aws\Structures\Artifact\ListComplianceInquiries;

trait ListComplianceInquiriesTrait
{
    /**
     * @param ListComplianceInquiriesRequest $args
     * @return ListComplianceInquiriesResponse
     */
    public function listComplianceInquiries(ListComplianceInquiriesRequest $args)
    {
        $result = parent::listComplianceInquiries($args->toArray());
        return new ListComplianceInquiriesResponse($result->toArray());
    }
}
