<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServerCertificate>|null $ServerCertificates
 * @property list<ServerCertificateScope>|null $Scopes
 * @property string|null $CertificateAuthorityArn
 * @property CheckCertificateRevocationStatusActions|null $CheckCertificateRevocationStatus
 */
class ServerCertificateConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerCertificates?: list<ServerCertificate>|null,
     *     Scopes?: list<ServerCertificateScope>|null,
     *     CertificateAuthorityArn?: string|null,
     *     CheckCertificateRevocationStatus?: CheckCertificateRevocationStatusActions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
