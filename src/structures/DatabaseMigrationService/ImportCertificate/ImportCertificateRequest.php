<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ImportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateIdentifier
 * @property string $CertificatePem
 * @property string $CertificateWallet
 * @property list<Shapes\Tag> $Tags
 */
class ImportCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateIdentifier: string,
     *     CertificatePem?: string,
     *     CertificateWallet?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
