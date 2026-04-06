<?php

namespace Sunaoka\Aws\Structures\EKS\DescribePodIdentityAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $associationId
 */
class DescribePodIdentityAssociationRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     associationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
