<?php

namespace Sunaoka\Aws\Structures\EKS\ListAddons;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListAddonsRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
