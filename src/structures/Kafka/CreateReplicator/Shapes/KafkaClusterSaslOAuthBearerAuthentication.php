<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TokenEndpointUrl
 * @property KafkaClusterOAuthClientCredentials|null $ClientCredentials
 * @property KafkaClusterOAuthIamJwtBearer|null $IamJwtBearer
 * @property KafkaClusterOAuthClientCredentialsAssertion|null $ClientCredentialsAssertion
 * @property 'POST'|'BASIC'|'NONE' $TokenEndpointAuthenticationMethod
 * @property string|null $Scope
 * @property string|null $TokenEndpointTlsCertificateArn
 */
class KafkaClusterSaslOAuthBearerAuthentication extends Shape
{
    /**
     * @param array{
     *     TokenEndpointUrl: string,
     *     ClientCredentials?: KafkaClusterOAuthClientCredentials|null,
     *     IamJwtBearer?: KafkaClusterOAuthIamJwtBearer|null,
     *     ClientCredentialsAssertion?: KafkaClusterOAuthClientCredentialsAssertion|null,
     *     TokenEndpointAuthenticationMethod: 'POST'|'BASIC'|'NONE',
     *     Scope?: string|null,
     *     TokenEndpointTlsCertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
