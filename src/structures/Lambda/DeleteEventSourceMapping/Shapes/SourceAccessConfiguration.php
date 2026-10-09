<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC_AUTH'|'VPC_SUBNET'|'VPC_SECURITY_GROUP'|'SASL_SCRAM_512_AUTH'|'SASL_SCRAM_256_AUTH'|'VIRTUAL_HOST'|'CLIENT_CERTIFICATE_TLS_AUTH'|'SERVER_ROOT_CA_CERTIFICATE'|'OAUTHBEARER_AUTH'|'OAUTHBEARER_SCOPE'|'OAUTHBEARER_AUDIENCE'|'OAUTHBEARER_LOGICAL_CLUSTER'|'OAUTHBEARER_IDENTITY_POOL'|'IAM_AUTH'|'IAM_OAUTHBEARER_AUTH'|null $Type
 * @property string|null $URI
 */
class SourceAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     Type?: 'BASIC_AUTH'|'VPC_SUBNET'|'VPC_SECURITY_GROUP'|'SASL_SCRAM_512_AUTH'|'SASL_SCRAM_256_AUTH'|'VIRTUAL_HOST'|'CLIENT_CERTIFICATE_TLS_AUTH'|'SERVER_ROOT_CA_CERTIFICATE'|'OAUTHBEARER_AUTH'|'OAUTHBEARER_SCOPE'|'OAUTHBEARER_AUDIENCE'|'OAUTHBEARER_LOGICAL_CLUSTER'|'OAUTHBEARER_IDENTITY_POOL'|'IAM_AUTH'|'IAM_OAUTHBEARER_AUTH'|null,
     *     URI?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
