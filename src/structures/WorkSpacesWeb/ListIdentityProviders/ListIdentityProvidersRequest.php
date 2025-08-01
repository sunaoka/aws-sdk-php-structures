<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListIdentityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 * @property string $portalArn
 */
class ListIdentityProvidersRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null,
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
