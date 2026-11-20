<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 * @property Shapes\ContextProvider|null $ContextProvider
 * @property string|null $IdentityCenterInstanceArn
 * @property bool|null $RemoveContextProvider
 * @property bool|null $RemoveIdentityCenterInstance
 */
class UpdateOpenIDConnectProviderRequest extends Request
{
    /**
     * @param array{
     *     OpenIDConnectProviderArn: string,
     *     ContextProvider?: Shapes\ContextProvider|null,
     *     IdentityCenterInstanceArn?: string|null,
     *     RemoveContextProvider?: bool|null,
     *     RemoveIdentityCenterInstance?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
