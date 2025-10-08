<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateDhcpOptions;

trait AssociateDhcpOptionsTrait
{
    /**
     * @param AssociateDhcpOptionsRequest $args
     * @return void
     */
    public function associateDhcpOptions(AssociateDhcpOptionsRequest $args)
    {
        parent::associateDhcpOptions($args->toArray());
    }
}
