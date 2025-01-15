<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property Shapes\UserPoolPolicyType|null $Policies
 * @property 'ACTIVE'|'INACTIVE'|null $DeletionProtection
 * @property Shapes\LambdaConfigType|null $LambdaConfig
 * @property list<'phone_number'|'email'>|null $AutoVerifiedAttributes
 * @property list<'phone_number'|'email'|'preferred_username'>|null $AliasAttributes
 * @property list<'phone_number'|'email'>|null $UsernameAttributes
 * @property string|null $SmsVerificationMessage
 * @property string|null $EmailVerificationMessage
 * @property string|null $EmailVerificationSubject
 * @property Shapes\VerificationMessageTemplateType|null $VerificationMessageTemplate
 * @property string|null $SmsAuthenticationMessage
 * @property 'OFF'|'ON'|'OPTIONAL'|null $MfaConfiguration
 * @property Shapes\UserAttributeUpdateSettingsType|null $UserAttributeUpdateSettings
 * @property Shapes\DeviceConfigurationType|null $DeviceConfiguration
 * @property Shapes\EmailConfigurationType|null $EmailConfiguration
 * @property Shapes\SmsConfigurationType|null $SmsConfiguration
 * @property array<string, string>|null $UserPoolTags
 * @property Shapes\AdminCreateUserConfigType|null $AdminCreateUserConfig
 * @property list<Shapes\SchemaAttributeType>|null $Schema
 * @property Shapes\UserPoolAddOnsType|null $UserPoolAddOns
 * @property Shapes\UsernameConfigurationType|null $UsernameConfiguration
 * @property Shapes\AccountRecoverySettingType|null $AccountRecoverySetting
 * @property 'LITE'|'ESSENTIALS'|'PLUS'|null $UserPoolTier
 */
class CreateUserPoolRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     Policies?: Shapes\UserPoolPolicyType|null,
     *     DeletionProtection?: 'ACTIVE'|'INACTIVE'|null,
     *     LambdaConfig?: Shapes\LambdaConfigType|null,
     *     AutoVerifiedAttributes?: list<'phone_number'|'email'>|null,
     *     AliasAttributes?: list<'phone_number'|'email'|'preferred_username'>|null,
     *     UsernameAttributes?: list<'phone_number'|'email'>|null,
     *     SmsVerificationMessage?: string|null,
     *     EmailVerificationMessage?: string|null,
     *     EmailVerificationSubject?: string|null,
     *     VerificationMessageTemplate?: Shapes\VerificationMessageTemplateType|null,
     *     SmsAuthenticationMessage?: string|null,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL'|null,
     *     UserAttributeUpdateSettings?: Shapes\UserAttributeUpdateSettingsType|null,
     *     DeviceConfiguration?: Shapes\DeviceConfigurationType|null,
     *     EmailConfiguration?: Shapes\EmailConfigurationType|null,
     *     SmsConfiguration?: Shapes\SmsConfigurationType|null,
     *     UserPoolTags?: array<string, string>|null,
     *     AdminCreateUserConfig?: Shapes\AdminCreateUserConfigType|null,
     *     Schema?: list<Shapes\SchemaAttributeType>|null,
     *     UserPoolAddOns?: Shapes\UserPoolAddOnsType|null,
     *     UsernameConfiguration?: Shapes\UsernameConfigurationType|null,
     *     AccountRecoverySetting?: Shapes\AccountRecoverySettingType|null,
     *     UserPoolTier?: 'LITE'|'ESSENTIALS'|'PLUS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
