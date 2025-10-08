<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\DescribeTunnel;

trait DescribeTunnelTrait
{
    /**
     * @param DescribeTunnelRequest $args
     * @return DescribeTunnelResponse
     */
    public function describeTunnel(DescribeTunnelRequest $args)
    {
        $result = parent::describeTunnel($args->toArray());
        return new DescribeTunnelResponse($result->toArray());
    }
}
