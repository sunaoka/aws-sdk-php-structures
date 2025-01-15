<?php

namespace Sunaoka\Aws\Structures\EKS\ListIdentityProviderConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListIdentityProviderConfigsRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
