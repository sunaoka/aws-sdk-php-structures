<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\RemoveTrustStoreRevocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property list<int> $RevocationIds
 */
class RemoveTrustStoreRevocationsRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     RevocationIds: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
