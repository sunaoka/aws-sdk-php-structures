<?php

namespace Sunaoka\Aws\Structures\Artifact\ListComplianceInquiryQueries;

trait ListComplianceInquiryQueriesTrait
{
    /**
     * @param ListComplianceInquiryQueriesRequest $args
     * @return ListComplianceInquiryQueriesResponse
     */
    public function listComplianceInquiryQueries(ListComplianceInquiryQueriesRequest $args)
    {
        $result = parent::listComplianceInquiryQueries($args->toArray());
        return new ListComplianceInquiryQueriesResponse($result->toArray());
    }
}
