<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDisableProviderForUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProviderName
 * @property string $ProviderAttributeName
 * @property string $ProviderAttributeValue
 */
class ProviderUserIdentifierType extends Shape
{
    /**
     * @param array{
     *     ProviderName?: string,
     *     ProviderAttributeName?: string,
     *     ProviderAttributeValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
