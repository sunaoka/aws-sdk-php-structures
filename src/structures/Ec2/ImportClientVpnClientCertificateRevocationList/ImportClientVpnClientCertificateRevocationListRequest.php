<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportClientVpnClientCertificateRevocationList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $CertificateRevocationList
 * @property bool|null $DryRun
 */
class ImportClientVpnClientCertificateRevocationListRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     CertificateRevocationList: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
