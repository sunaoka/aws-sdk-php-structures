<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetCertificateSigningRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property 'SHA224'|'SHA256'|'SHA384'|'SHA512' $SigningAlgorithm
 * @property Shapes\CertificateSubjectType $CertificateSubject
 */
class GetCertificateSigningRequestRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     SigningAlgorithm: 'SHA224'|'SHA256'|'SHA384'|'SHA512',
     *     CertificateSubject: Shapes\CertificateSubjectType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
