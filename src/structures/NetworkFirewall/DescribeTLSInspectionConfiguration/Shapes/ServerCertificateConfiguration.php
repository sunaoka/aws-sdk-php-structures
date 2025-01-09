<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServerCertificate> $ServerCertificates
 * @property list<ServerCertificateScope> $Scopes
 * @property string $CertificateAuthorityArn
 * @property CheckCertificateRevocationStatusActions $CheckCertificateRevocationStatus
 */
class ServerCertificateConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerCertificates?: list<ServerCertificate>,
     *     Scopes?: list<ServerCertificateScope>,
     *     CertificateAuthorityArn?: string,
     *     CheckCertificateRevocationStatus?: CheckCertificateRevocationStatusActions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
