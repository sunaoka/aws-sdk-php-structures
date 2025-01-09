<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddTrustStoreRevocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrustStoreArn
 * @property int $RevocationId
 * @property 'CRL' $RevocationType
 * @property int $NumberOfRevokedEntries
 */
class TrustStoreRevocation extends Shape
{
    /**
     * @param array{
     *     TrustStoreArn?: string,
     *     RevocationId?: int,
     *     RevocationType?: 'CRL',
     *     NumberOfRevokedEntries?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
