<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CertificateIdentifier
 * @property bool|null $RemoveCustomerOverride
 */
class ModifyCertificatesRequest extends Request
{
    /**
     * @param array{
     *     CertificateIdentifier?: string|null,
     *     RemoveCustomerOverride?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
