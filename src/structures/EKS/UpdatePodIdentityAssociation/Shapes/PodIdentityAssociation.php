<?php

namespace Sunaoka\Aws\Structures\EKS\UpdatePodIdentityAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterName
 * @property string|null $namespace
 * @property string|null $serviceAccount
 * @property string|null $roleArn
 * @property string|null $associationArn
 * @property string|null $associationId
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property string|null $ownerArn
 * @property bool|null $disableSessionTags
 * @property string|null $targetRoleArn
 * @property string|null $externalId
 */
class PodIdentityAssociation extends Shape
{
    /**
     * @param array{
     *     clusterName?: string|null,
     *     namespace?: string|null,
     *     serviceAccount?: string|null,
     *     roleArn?: string|null,
     *     associationArn?: string|null,
     *     associationId?: string|null,
     *     tags?: array<string, string>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     ownerArn?: string|null,
     *     disableSessionTags?: bool|null,
     *     targetRoleArn?: string|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
