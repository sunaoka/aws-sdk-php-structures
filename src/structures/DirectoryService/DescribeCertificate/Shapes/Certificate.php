<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateId
 * @property 'Registering'|'Registered'|'RegisterFailed'|'Deregistering'|'Deregistered'|'DeregisterFailed' $State
 * @property string $StateReason
 * @property string $CommonName
 * @property \Aws\Api\DateTimeResult $RegisteredDateTime
 * @property \Aws\Api\DateTimeResult $ExpiryDateTime
 * @property 'ClientCertAuth'|'ClientLDAPS' $Type
 * @property ClientCertAuthSettings $ClientCertAuthSettings
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     CertificateId?: string,
     *     State?: 'Registering'|'Registered'|'RegisterFailed'|'Deregistering'|'Deregistered'|'DeregisterFailed',
     *     StateReason?: string,
     *     CommonName?: string,
     *     RegisteredDateTime?: \Aws\Api\DateTimeResult,
     *     ExpiryDateTime?: \Aws\Api\DateTimeResult,
     *     Type?: 'ClientCertAuth'|'ClientLDAPS',
     *     ClientCertAuthSettings?: ClientCertAuthSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
