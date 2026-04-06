<?php

namespace Sunaoka\Aws\Structures\EKS\ListCapabilities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCapabilitiesRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
