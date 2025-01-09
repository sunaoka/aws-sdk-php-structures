<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminUpdateUserAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property list<Shapes\AttributeType> $UserAttributes
 * @property array<string, string> $ClientMetadata
 */
class AdminUpdateUserAttributesRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     UserAttributes: list<Shapes\AttributeType>,
     *     ClientMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
