<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteDhcpOptions;

trait DeleteDhcpOptionsTrait
{
    /**
     * @param DeleteDhcpOptionsRequest $args
     * @return void
     */
    public function deleteDhcpOptions(DeleteDhcpOptionsRequest $args)
    {
        parent::deleteDhcpOptions($args->toArray());
    }
}
