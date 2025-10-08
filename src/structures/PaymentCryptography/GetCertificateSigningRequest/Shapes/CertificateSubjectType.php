<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetCertificateSigningRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommonName
 * @property string|null $OrganizationUnit
 * @property string|null $Organization
 * @property string|null $City
 * @property string|null $Country
 * @property string|null $StateOrProvince
 * @property string|null $EmailAddress
 */
class CertificateSubjectType extends Shape
{
    /**
     * @param array{
     *     CommonName: string,
     *     OrganizationUnit?: string|null,
     *     Organization?: string|null,
     *     City?: string|null,
     *     Country?: string|null,
     *     StateOrProvince?: string|null,
     *     EmailAddress?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
