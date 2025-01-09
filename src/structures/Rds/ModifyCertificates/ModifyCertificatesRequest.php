<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateIdentifier
 * @property bool $RemoveCustomerOverride
 */
class ModifyCertificatesRequest extends Request
{
    /**
     * @param array{
     *     CertificateIdentifier?: string,
     *     RemoveCustomerOverride?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
