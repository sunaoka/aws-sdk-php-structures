<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePools;

trait DescribePoolsTrait
{
    /**
     * @param DescribePoolsRequest $args
     * @return DescribePoolsResponse
     */
    public function describePools(DescribePoolsRequest $args)
    {
        $result = parent::describePools($args->toArray());
        return new DescribePoolsResponse($result->toArray());
    }
}
