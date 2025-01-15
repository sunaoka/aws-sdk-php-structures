<?php

namespace Sunaoka\Aws\Structures\EKS\UpdatePodIdentityAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $associationId
 * @property string|null $roleArn
 * @property string|null $clientRequestToken
 */
class UpdatePodIdentityAssociationRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     associationId: string,
     *     roleArn?: string|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
