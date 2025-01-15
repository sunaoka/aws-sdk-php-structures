<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDisableProviderForUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProviderName
 * @property string|null $ProviderAttributeName
 * @property string|null $ProviderAttributeValue
 */
class ProviderUserIdentifierType extends Shape
{
    /**
     * @param array{
     *     ProviderName?: string|null,
     *     ProviderAttributeName?: string|null,
     *     ProviderAttributeValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
