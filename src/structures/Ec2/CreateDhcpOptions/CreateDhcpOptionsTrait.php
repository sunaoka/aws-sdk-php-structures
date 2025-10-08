<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDhcpOptions;

trait CreateDhcpOptionsTrait
{
    /**
     * @param CreateDhcpOptionsRequest $args
     * @return CreateDhcpOptionsResponse
     */
    public function createDhcpOptions(CreateDhcpOptionsRequest $args)
    {
        $result = parent::createDhcpOptions($args->toArray());
        return new CreateDhcpOptionsResponse($result->toArray());
    }
}
