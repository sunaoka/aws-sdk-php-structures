<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 */
class DeleteOpenIDConnectProviderRequest extends Request
{
    /**
     * @param array{OpenIDConnectProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
