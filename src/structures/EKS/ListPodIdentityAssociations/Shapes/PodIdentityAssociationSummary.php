<?php

namespace Sunaoka\Aws\Structures\EKS\ListPodIdentityAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterName
 * @property string|null $namespace
 * @property string|null $serviceAccount
 * @property string|null $associationArn
 * @property string|null $associationId
 * @property string|null $ownerArn
 */
class PodIdentityAssociationSummary extends Shape
{
    /**
     * @param array{
     *     clusterName?: string|null,
     *     namespace?: string|null,
     *     serviceAccount?: string|null,
     *     associationArn?: string|null,
     *     associationId?: string|null,
     *     ownerArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
