<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC_AUTH'|'VPC_SUBNET'|'VPC_SECURITY_GROUP'|'SASL_SCRAM_512_AUTH'|'SASL_SCRAM_256_AUTH'|'VIRTUAL_HOST'|'CLIENT_CERTIFICATE_TLS_AUTH'|'SERVER_ROOT_CA_CERTIFICATE'|null $Type
 * @property string|null $URI
 */
class SourceAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     Type?: 'BASIC_AUTH'|'VPC_SUBNET'|'VPC_SECURITY_GROUP'|'SASL_SCRAM_512_AUTH'|'SASL_SCRAM_256_AUTH'|'VIRTUAL_HOST'|'CLIENT_CERTIFICATE_TLS_AUTH'|'SERVER_ROOT_CA_CERTIFICATE'|null,
     *     URI?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
