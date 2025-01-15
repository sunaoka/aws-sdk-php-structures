<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateId
 * @property 'Registering'|'Registered'|'RegisterFailed'|'Deregistering'|'Deregistered'|'DeregisterFailed'|null $State
 * @property string|null $StateReason
 * @property string|null $CommonName
 * @property \Aws\Api\DateTimeResult|null $RegisteredDateTime
 * @property \Aws\Api\DateTimeResult|null $ExpiryDateTime
 * @property 'ClientCertAuth'|'ClientLDAPS'|null $Type
 * @property ClientCertAuthSettings|null $ClientCertAuthSettings
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     CertificateId?: string|null,
     *     State?: 'Registering'|'Registered'|'RegisterFailed'|'Deregistering'|'Deregistered'|'DeregisterFailed'|null,
     *     StateReason?: string|null,
     *     CommonName?: string|null,
     *     RegisteredDateTime?: \Aws\Api\DateTimeResult|null,
     *     ExpiryDateTime?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'ClientCertAuth'|'ClientLDAPS'|null,
     *     ClientCertAuthSettings?: ClientCertAuthSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
