<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateIpamByoasn;

trait DisassociateIpamByoasnTrait
{
    /**
     * @param DisassociateIpamByoasnRequest $args
     * @return DisassociateIpamByoasnResponse
     */
    public function disassociateIpamByoasn(DisassociateIpamByoasnRequest $args)
    {
        $result = parent::disassociateIpamByoasn($args->toArray());
        return new DisassociateIpamByoasnResponse($result->toArray());
    }
}
