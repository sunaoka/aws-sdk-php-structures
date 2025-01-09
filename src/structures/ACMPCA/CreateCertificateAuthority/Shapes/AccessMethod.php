<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomObjectIdentifier
 * @property 'CA_REPOSITORY'|'RESOURCE_PKI_MANIFEST'|'RESOURCE_PKI_NOTIFY' $AccessMethodType
 */
class AccessMethod extends Shape
{
    /**
     * @param array{
     *     CustomObjectIdentifier?: string,
     *     AccessMethodType?: 'CA_REPOSITORY'|'RESOURCE_PKI_MANIFEST'|'RESOURCE_PKI_NOTIFY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
