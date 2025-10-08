<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportClientVpnClientCertificateRevocationList;

trait ImportClientVpnClientCertificateRevocationListTrait
{
    /**
     * @param ImportClientVpnClientCertificateRevocationListRequest $args
     * @return ImportClientVpnClientCertificateRevocationListResponse
     */
    public function importClientVpnClientCertificateRevocationList(
        ImportClientVpnClientCertificateRevocationListRequest $args,
    ) {
        $result = parent::importClientVpnClientCertificateRevocationList($args->toArray());
        return new ImportClientVpnClientCertificateRevocationListResponse($result->toArray());
    }
}
