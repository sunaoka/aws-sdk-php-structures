<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeDRTAccess;

trait DescribeDRTAccessTrait
{
    /**
     * @param DescribeDRTAccessRequest $args
     * @return DescribeDRTAccessResponse
     */
    public function describeDRTAccess(DescribeDRTAccessRequest $args)
    {
        $result = parent::describeDRTAccess($args->toArray());
        return new DescribeDRTAccessResponse($result->toArray());
    }
}
