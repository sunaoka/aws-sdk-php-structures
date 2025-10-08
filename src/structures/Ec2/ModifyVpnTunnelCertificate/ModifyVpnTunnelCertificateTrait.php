<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelCertificate;

trait ModifyVpnTunnelCertificateTrait
{
    /**
     * @param ModifyVpnTunnelCertificateRequest $args
     * @return ModifyVpnTunnelCertificateResponse
     */
    public function modifyVpnTunnelCertificate(ModifyVpnTunnelCertificateRequest $args)
    {
        $result = parent::modifyVpnTunnelCertificate($args->toArray());
        return new ModifyVpnTunnelCertificateResponse($result->toArray());
    }
}
