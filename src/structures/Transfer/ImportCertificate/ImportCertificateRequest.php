<?php

namespace Sunaoka\Aws\Structures\Transfer\ImportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIGNING'|'ENCRYPTION'|'TLS' $Usage
 * @property string $Certificate
 * @property string|null $CertificateChain
 * @property string|null $PrivateKey
 * @property \Aws\Api\DateTimeResult|null $ActiveDate
 * @property \Aws\Api\DateTimeResult|null $InactiveDate
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportCertificateRequest extends Request
{
    /**
     * @param array{
     *     Usage: 'SIGNING'|'ENCRYPTION'|'TLS',
     *     Certificate: string,
     *     CertificateChain?: string|null,
     *     PrivateKey?: string|null,
     *     ActiveDate?: \Aws\Api\DateTimeResult|null,
     *     InactiveDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
