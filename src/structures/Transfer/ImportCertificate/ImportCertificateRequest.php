<?php

namespace Sunaoka\Aws\Structures\Transfer\ImportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIGNING'|'ENCRYPTION'|'TLS' $Usage
 * @property string $Certificate
 * @property string $CertificateChain
 * @property string $PrivateKey
 * @property \Aws\Api\DateTimeResult $ActiveDate
 * @property \Aws\Api\DateTimeResult $InactiveDate
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class ImportCertificateRequest extends Request
{
    /**
     * @param array{
     *     Usage: 'SIGNING'|'ENCRYPTION'|'TLS',
     *     Certificate: string,
     *     CertificateChain?: string,
     *     PrivateKey?: string,
     *     ActiveDate?: \Aws\Api\DateTimeResult,
     *     InactiveDate?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
