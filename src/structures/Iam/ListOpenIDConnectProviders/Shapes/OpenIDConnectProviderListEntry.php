<?php

namespace Sunaoka\Aws\Structures\Iam\ListOpenIDConnectProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property bool|null $IsTrustedIdentityPropagationEnabled
 */
class OpenIDConnectProviderListEntry extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     IsTrustedIdentityPropagationEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
