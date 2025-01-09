<?php

namespace Sunaoka\Aws\Structures\EKS\ListPodIdentityAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterName
 * @property string $namespace
 * @property string $serviceAccount
 * @property string $associationArn
 * @property string $associationId
 * @property string $ownerArn
 */
class PodIdentityAssociationSummary extends Shape
{
    /**
     * @param array{
     *     clusterName?: string,
     *     namespace?: string,
     *     serviceAccount?: string,
     *     associationArn?: string,
     *     associationId?: string,
     *     ownerArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
