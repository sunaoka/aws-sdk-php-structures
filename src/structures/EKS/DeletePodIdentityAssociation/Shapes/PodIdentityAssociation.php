<?php

namespace Sunaoka\Aws\Structures\EKS\DeletePodIdentityAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterName
 * @property string $namespace
 * @property string $serviceAccount
 * @property string $roleArn
 * @property string $associationArn
 * @property string $associationId
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property string $ownerArn
 */
class PodIdentityAssociation extends Shape
{
    /**
     * @param array{
     *     clusterName?: string,
     *     namespace?: string,
     *     serviceAccount?: string,
     *     roleArn?: string,
     *     associationArn?: string,
     *     associationId?: string,
     *     tags?: array<string, string>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult,
     *     ownerArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
