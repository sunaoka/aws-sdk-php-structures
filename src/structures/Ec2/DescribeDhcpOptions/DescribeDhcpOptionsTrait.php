<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDhcpOptions;

trait DescribeDhcpOptionsTrait
{
    /**
     * @param DescribeDhcpOptionsRequest $args
     * @return DescribeDhcpOptionsResponse
     */
    public function describeDhcpOptions(DescribeDhcpOptionsRequest $args)
    {
        $result = parent::describeDhcpOptions($args->toArray());
        return new DescribeDhcpOptionsResponse($result->toArray());
    }
}
