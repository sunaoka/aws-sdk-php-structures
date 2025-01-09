<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property Shapes\UserPoolPolicyType $Policies
 * @property 'ACTIVE'|'INACTIVE' $DeletionProtection
 * @property Shapes\LambdaConfigType $LambdaConfig
 * @property list<'phone_number'|'email'> $AutoVerifiedAttributes
 * @property string $SmsVerificationMessage
 * @property string $EmailVerificationMessage
 * @property string $EmailVerificationSubject
 * @property Shapes\VerificationMessageTemplateType $VerificationMessageTemplate
 * @property string $SmsAuthenticationMessage
 * @property Shapes\UserAttributeUpdateSettingsType $UserAttributeUpdateSettings
 * @property 'OFF'|'ON'|'OPTIONAL' $MfaConfiguration
 * @property Shapes\DeviceConfigurationType $DeviceConfiguration
 * @property Shapes\EmailConfigurationType $EmailConfiguration
 * @property Shapes\SmsConfigurationType $SmsConfiguration
 * @property array<string, string> $UserPoolTags
 * @property Shapes\AdminCreateUserConfigType $AdminCreateUserConfig
 * @property Shapes\UserPoolAddOnsType $UserPoolAddOns
 * @property Shapes\AccountRecoverySettingType $AccountRecoverySetting
 * @property string $PoolName
 * @property 'LITE'|'ESSENTIALS'|'PLUS' $UserPoolTier
 */
class UpdateUserPoolRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Policies?: Shapes\UserPoolPolicyType,
     *     DeletionProtection?: 'ACTIVE'|'INACTIVE',
     *     LambdaConfig?: Shapes\LambdaConfigType,
     *     AutoVerifiedAttributes?: list<'phone_number'|'email'>,
     *     SmsVerificationMessage?: string,
     *     EmailVerificationMessage?: string,
     *     EmailVerificationSubject?: string,
     *     VerificationMessageTemplate?: Shapes\VerificationMessageTemplateType,
     *     SmsAuthenticationMessage?: string,
     *     UserAttributeUpdateSettings?: Shapes\UserAttributeUpdateSettingsType,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL',
     *     DeviceConfiguration?: Shapes\DeviceConfigurationType,
     *     EmailConfiguration?: Shapes\EmailConfigurationType,
     *     SmsConfiguration?: Shapes\SmsConfigurationType,
     *     UserPoolTags?: array<string, string>,
     *     AdminCreateUserConfig?: Shapes\AdminCreateUserConfigType,
     *     UserPoolAddOns?: Shapes\UserPoolAddOnsType,
     *     AccountRecoverySetting?: Shapes\AccountRecoverySettingType,
     *     PoolName?: string,
     *     UserPoolTier?: 'LITE'|'ESSENTIALS'|'PLUS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
