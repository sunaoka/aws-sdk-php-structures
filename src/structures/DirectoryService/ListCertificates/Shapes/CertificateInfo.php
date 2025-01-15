<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateId
 * @property string|null $CommonName
 * @property 'Registering'|'Registered'|'RegisterFailed'|'Deregistering'|'Deregistered'|'DeregisterFailed'|null $State
 * @property \Aws\Api\DateTimeResult|null $ExpiryDateTime
 * @property 'ClientCertAuth'|'ClientLDAPS'|null $Type
 */
class CertificateInfo extends Shape
{
    /**
     * @param array{
     *     CertificateId?: string|null,
     *     CommonName?: string|null,
     *     State?: 'Registering'|'Registered'|'RegisterFailed'|'Deregistering'|'Deregistered'|'DeregisterFailed'|null,
     *     ExpiryDateTime?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'ClientCertAuth'|'ClientLDAPS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
