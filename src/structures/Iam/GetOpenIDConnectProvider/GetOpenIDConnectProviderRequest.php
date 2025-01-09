<?php

namespace Sunaoka\Aws\Structures\Iam\GetOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 */
class GetOpenIDConnectProviderRequest extends Request
{
    /**
     * @param array{OpenIDConnectProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
