<?php

namespace Sunaoka\Aws\Structures\EKS\UpdatePodIdentityAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $associationId
 * @property string $roleArn
 * @property string $clientRequestToken
 */
class UpdatePodIdentityAssociationRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     associationId: string,
     *     roleArn?: string,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
