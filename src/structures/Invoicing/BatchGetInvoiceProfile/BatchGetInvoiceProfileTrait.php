<?php

namespace Sunaoka\Aws\Structures\Invoicing\BatchGetInvoiceProfile;

trait BatchGetInvoiceProfileTrait
{
    /**
     * @param BatchGetInvoiceProfileRequest $args
     * @return BatchGetInvoiceProfileResponse
     */
    public function batchGetInvoiceProfile(BatchGetInvoiceProfileRequest $args)
    {
        $result = parent::batchGetInvoiceProfile($args->toArray());
        return new BatchGetInvoiceProfileResponse($result->toArray());
    }
}
