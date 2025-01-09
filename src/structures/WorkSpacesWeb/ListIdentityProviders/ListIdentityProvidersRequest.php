<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListIdentityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $maxResults
 * @property string $nextToken
 * @property string $portalArn
 */
class ListIdentityProvidersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, max>,
     *     nextToken?: string,
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
