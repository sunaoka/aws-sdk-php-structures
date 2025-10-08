<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeBridge;

trait DescribeBridgeTrait
{
    /**
     * @param DescribeBridgeRequest $args
     * @return DescribeBridgeResponse
     */
    public function describeBridge(DescribeBridgeRequest $args)
    {
        $result = parent::describeBridge($args->toArray());
        return new DescribeBridgeResponse($result->toArray());
    }
}
