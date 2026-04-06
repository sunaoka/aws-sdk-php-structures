<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 */
class DeleteTrustStoreRequest extends Request
{
    /**
     * @param array{TrustStoreArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
