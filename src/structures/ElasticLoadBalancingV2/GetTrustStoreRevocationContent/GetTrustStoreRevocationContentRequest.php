<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\GetTrustStoreRevocationContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property int $RevocationId
 */
class GetTrustStoreRevocationContentRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     RevocationId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
