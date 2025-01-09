<?php

namespace Sunaoka\Aws\Structures\Iam\RemoveClientIDFromOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 * @property string $ClientID
 */
class RemoveClientIDFromOpenIDConnectProviderRequest extends Request
{
    /**
     * @param array{
     *     OpenIDConnectProviderArn: string,
     *     ClientID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
