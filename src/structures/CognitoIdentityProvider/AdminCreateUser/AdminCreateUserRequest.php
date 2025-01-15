<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminCreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property list<Shapes\AttributeType>|null $UserAttributes
 * @property list<Shapes\AttributeType>|null $ValidationData
 * @property string|null $TemporaryPassword
 * @property bool|null $ForceAliasCreation
 * @property 'RESEND'|'SUPPRESS'|null $MessageAction
 * @property list<'SMS'|'EMAIL'>|null $DesiredDeliveryMediums
 * @property array<string, string>|null $ClientMetadata
 */
class AdminCreateUserRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     UserAttributes?: list<Shapes\AttributeType>|null,
     *     ValidationData?: list<Shapes\AttributeType>|null,
     *     TemporaryPassword?: string|null,
     *     ForceAliasCreation?: bool|null,
     *     MessageAction?: 'RESEND'|'SUPPRESS'|null,
     *     DesiredDeliveryMediums?: list<'SMS'|'EMAIL'>|null,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
