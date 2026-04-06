<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateAccessEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterName
 * @property string|null $principalArn
 * @property list<string>|null $kubernetesGroups
 * @property string|null $accessEntryArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property array<string, string>|null $tags
 * @property string|null $username
 * @property string|null $type
 */
class AccessEntry extends Shape
{
    /**
     * @param array{
     *     clusterName?: string|null,
     *     principalArn?: string|null,
     *     kubernetesGroups?: list<string>|null,
     *     accessEntryArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null,
     *     username?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
