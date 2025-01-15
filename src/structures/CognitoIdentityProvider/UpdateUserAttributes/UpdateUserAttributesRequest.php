<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AttributeType> $UserAttributes
 * @property string $AccessToken
 * @property array<string, string>|null $ClientMetadata
 */
class UpdateUserAttributesRequest extends Request
{
    /**
     * @param array{
     *     UserAttributes: list<Shapes\AttributeType>,
     *     AccessToken: string,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
