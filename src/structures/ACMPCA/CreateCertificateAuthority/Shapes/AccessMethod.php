<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomObjectIdentifier
 * @property 'CA_REPOSITORY'|'RESOURCE_PKI_MANIFEST'|'RESOURCE_PKI_NOTIFY'|null $AccessMethodType
 */
class AccessMethod extends Shape
{
    /**
     * @param array{
     *     CustomObjectIdentifier?: string|null,
     *     AccessMethodType?: 'CA_REPOSITORY'|'RESOURCE_PKI_MANIFEST'|'RESOURCE_PKI_NOTIFY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
