<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminCreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property list<Shapes\AttributeType> $UserAttributes
 * @property list<Shapes\AttributeType> $ValidationData
 * @property string $TemporaryPassword
 * @property bool $ForceAliasCreation
 * @property 'RESEND'|'SUPPRESS' $MessageAction
 * @property list<'SMS'|'EMAIL'> $DesiredDeliveryMediums
 * @property array<string, string> $ClientMetadata
 */
class AdminCreateUserRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     UserAttributes?: list<Shapes\AttributeType>,
     *     ValidationData?: list<Shapes\AttributeType>,
     *     TemporaryPassword?: string,
     *     ForceAliasCreation?: bool,
     *     MessageAction?: 'RESEND'|'SUPPRESS',
     *     DesiredDeliveryMediums?: list<'SMS'|'EMAIL'>,
     *     ClientMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
