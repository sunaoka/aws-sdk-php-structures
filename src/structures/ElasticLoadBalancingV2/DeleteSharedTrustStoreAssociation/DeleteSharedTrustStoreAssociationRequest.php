<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteSharedTrustStoreAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property string $ResourceArn
 */
class DeleteSharedTrustStoreAssociationRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
