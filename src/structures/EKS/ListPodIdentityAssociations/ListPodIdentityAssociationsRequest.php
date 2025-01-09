<?php

namespace Sunaoka\Aws\Structures\EKS\ListPodIdentityAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $namespace
 * @property string $serviceAccount
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListPodIdentityAssociationsRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     namespace?: string,
     *     serviceAccount?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
