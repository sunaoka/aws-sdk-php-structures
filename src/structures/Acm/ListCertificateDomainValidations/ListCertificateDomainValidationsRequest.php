<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificateDomainValidations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxItems
 */
class ListCertificateDomainValidationsRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     NextToken?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
