<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateId
 * @property string $CommonName
 * @property 'Registering'|'Registered'|'RegisterFailed'|'Deregistering'|'Deregistered'|'DeregisterFailed' $State
 * @property \Aws\Api\DateTimeResult $ExpiryDateTime
 * @property 'ClientCertAuth'|'ClientLDAPS' $Type
 */
class CertificateInfo extends Shape
{
    /**
     * @param array{
     *     CertificateId?: string,
     *     CommonName?: string,
     *     State?: 'Registering'|'Registered'|'RegisterFailed'|'Deregistering'|'Deregistered'|'DeregisterFailed',
     *     ExpiryDateTime?: \Aws\Api\DateTimeResult,
     *     Type?: 'ClientCertAuth'|'ClientLDAPS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
