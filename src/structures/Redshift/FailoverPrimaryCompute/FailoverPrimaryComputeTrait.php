<?php

namespace Sunaoka\Aws\Structures\Redshift\FailoverPrimaryCompute;

trait FailoverPrimaryComputeTrait
{
    /**
     * @param FailoverPrimaryComputeRequest $args
     * @return FailoverPrimaryComputeResponse
     */
    public function failoverPrimaryCompute(FailoverPrimaryComputeRequest $args)
    {
        $result = parent::failoverPrimaryCompute($args->toArray());
        return new FailoverPrimaryComputeResponse($result->toArray());
    }
}
