<?php

namespace Sunaoka\Aws\Structures\EKS\ListPodIdentityAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string|null $namespace
 * @property string|null $serviceAccount
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListPodIdentityAssociationsRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     namespace?: string|null,
     *     serviceAccount?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
