<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAccessEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property list<string> $kubernetesGroups
 * @property string $accessEntryArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string> $tags
 * @property string $username
 * @property string $type
 */
class AccessEntry extends Shape
{
    /**
     * @param array{
     *     clusterName?: string,
     *     principalArn?: string,
     *     kubernetesGroups?: list<string>,
     *     accessEntryArn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>,
     *     username?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
