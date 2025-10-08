<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportClientVpnClientCertificateRevocationList;

trait ExportClientVpnClientCertificateRevocationListTrait
{
    /**
     * @param ExportClientVpnClientCertificateRevocationListRequest $args
     * @return ExportClientVpnClientCertificateRevocationListResponse
     */
    public function exportClientVpnClientCertificateRevocationList(ExportClientVpnClientCertificateRevocationListRequest $args)
    {
        $result = parent::exportClientVpnClientCertificateRevocationList($args->toArray());
        return new ExportClientVpnClientCertificateRevocationListResponse($result->toArray());
    }
}
