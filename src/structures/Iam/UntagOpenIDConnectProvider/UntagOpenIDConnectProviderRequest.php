<?php

namespace Sunaoka\Aws\Structures\Iam\UntagOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 * @property list<string> $TagKeys
 */
class UntagOpenIDConnectProviderRequest extends Request
{
    /**
     * @param array{
     *     OpenIDConnectProviderArn: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
