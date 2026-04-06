<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddTrustStoreRevocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property list<Shapes\RevocationContent>|null $RevocationContents
 */
class AddTrustStoreRevocationsRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     RevocationContents?: list<Shapes\RevocationContent>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
