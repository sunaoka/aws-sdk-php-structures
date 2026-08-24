<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Audience
 * @property 'RS256'|'ES384' $SigningAlgorithm
 * @property string|null $TokenRequestSecretArn
 */
class KafkaClusterOAuthClientCredentialsAssertion extends Shape
{
    /**
     * @param array{
     *     Audience: string,
     *     SigningAlgorithm: 'RS256'|'ES384',
     *     TokenRequestSecretArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
