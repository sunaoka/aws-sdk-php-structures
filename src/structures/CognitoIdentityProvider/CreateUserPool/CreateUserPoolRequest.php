<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property Shapes\UserPoolPolicyType $Policies
 * @property 'ACTIVE'|'INACTIVE' $DeletionProtection
 * @property Shapes\LambdaConfigType $LambdaConfig
 * @property list<'phone_number'|'email'> $AutoVerifiedAttributes
 * @property list<'phone_number'|'email'|'preferred_username'> $AliasAttributes
 * @property list<'phone_number'|'email'> $UsernameAttributes
 * @property string $SmsVerificationMessage
 * @property string $EmailVerificationMessage
 * @property string $EmailVerificationSubject
 * @property Shapes\VerificationMessageTemplateType $VerificationMessageTemplate
 * @property string $SmsAuthenticationMessage
 * @property 'OFF'|'ON'|'OPTIONAL' $MfaConfiguration
 * @property Shapes\UserAttributeUpdateSettingsType $UserAttributeUpdateSettings
 * @property Shapes\DeviceConfigurationType $DeviceConfiguration
 * @property Shapes\EmailConfigurationType $EmailConfiguration
 * @property Shapes\SmsConfigurationType $SmsConfiguration
 * @property array<string, string> $UserPoolTags
 * @property Shapes\AdminCreateUserConfigType $AdminCreateUserConfig
 * @property list<Shapes\SchemaAttributeType> $Schema
 * @property Shapes\UserPoolAddOnsType $UserPoolAddOns
 * @property Shapes\UsernameConfigurationType $UsernameConfiguration
 * @property Shapes\AccountRecoverySettingType $AccountRecoverySetting
 * @property 'LITE'|'ESSENTIALS'|'PLUS' $UserPoolTier
 */
class CreateUserPoolRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     Policies?: Shapes\UserPoolPolicyType,
     *     DeletionProtection?: 'ACTIVE'|'INACTIVE',
     *     LambdaConfig?: Shapes\LambdaConfigType,
     *     AutoVerifiedAttributes?: list<'phone_number'|'email'>,
     *     AliasAttributes?: list<'phone_number'|'email'|'preferred_username'>,
     *     UsernameAttributes?: list<'phone_number'|'email'>,
     *     SmsVerificationMessage?: string,
     *     EmailVerificationMessage?: string,
     *     EmailVerificationSubject?: string,
     *     VerificationMessageTemplate?: Shapes\VerificationMessageTemplateType,
     *     SmsAuthenticationMessage?: string,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL',
     *     UserAttributeUpdateSettings?: Shapes\UserAttributeUpdateSettingsType,
     *     DeviceConfiguration?: Shapes\DeviceConfigurationType,
     *     EmailConfiguration?: Shapes\EmailConfigurationType,
     *     SmsConfiguration?: Shapes\SmsConfigurationType,
     *     UserPoolTags?: array<string, string>,
     *     AdminCreateUserConfig?: Shapes\AdminCreateUserConfigType,
     *     Schema?: list<Shapes\SchemaAttributeType>,
     *     UserPoolAddOns?: Shapes\UserPoolAddOnsType,
     *     UsernameConfiguration?: Shapes\UsernameConfigurationType,
     *     AccountRecoverySetting?: Shapes\AccountRecoverySettingType,
     *     UserPoolTier?: 'LITE'|'ESSENTIALS'|'PLUS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
