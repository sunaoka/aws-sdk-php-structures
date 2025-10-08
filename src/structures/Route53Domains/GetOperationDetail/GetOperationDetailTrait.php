<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetOperationDetail;

trait GetOperationDetailTrait
{
    /**
     * @param GetOperationDetailRequest $args
     * @return GetOperationDetailResponse
     */
    public function getOperationDetail(GetOperationDetailRequest $args)
    {
        $result = parent::getOperationDetail($args->toArray());
        return new GetOperationDetailResponse($result->toArray());
    }
}
