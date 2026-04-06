<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ImportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateIdentifier
 * @property string|null $CertificatePem
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $CertificateWallet
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 */
class ImportCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateIdentifier: string,
     *     CertificatePem?: string|null,
     *     CertificateWallet?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
