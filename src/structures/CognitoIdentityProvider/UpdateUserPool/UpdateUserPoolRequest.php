<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property Shapes\UserPoolPolicyType|null $Policies
 * @property 'ACTIVE'|'INACTIVE'|null $DeletionProtection
 * @property Shapes\LambdaConfigType|null $LambdaConfig
 * @property list<'phone_number'|'email'>|null $AutoVerifiedAttributes
 * @property string|null $SmsVerificationMessage
 * @property string|null $EmailVerificationMessage
 * @property string|null $EmailVerificationSubject
 * @property Shapes\VerificationMessageTemplateType|null $VerificationMessageTemplate
 * @property string|null $SmsAuthenticationMessage
 * @property Shapes\UserAttributeUpdateSettingsType|null $UserAttributeUpdateSettings
 * @property 'OFF'|'ON'|'OPTIONAL'|null $MfaConfiguration
 * @property Shapes\DeviceConfigurationType|null $DeviceConfiguration
 * @property Shapes\EmailConfigurationType|null $EmailConfiguration
 * @property Shapes\SmsConfigurationType|null $SmsConfiguration
 * @property array<string, string>|null $UserPoolTags
 * @property Shapes\AdminCreateUserConfigType|null $AdminCreateUserConfig
 * @property Shapes\UserPoolAddOnsType|null $UserPoolAddOns
 * @property Shapes\AccountRecoverySettingType|null $AccountRecoverySetting
 * @property string|null $PoolName
 * @property 'LITE'|'ESSENTIALS'|'PLUS'|null $UserPoolTier
 */
class UpdateUserPoolRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Policies?: Shapes\UserPoolPolicyType|null,
     *     DeletionProtection?: 'ACTIVE'|'INACTIVE'|null,
     *     LambdaConfig?: Shapes\LambdaConfigType|null,
     *     AutoVerifiedAttributes?: list<'phone_number'|'email'>|null,
     *     SmsVerificationMessage?: string|null,
     *     EmailVerificationMessage?: string|null,
     *     EmailVerificationSubject?: string|null,
     *     VerificationMessageTemplate?: Shapes\VerificationMessageTemplateType|null,
     *     SmsAuthenticationMessage?: string|null,
     *     UserAttributeUpdateSettings?: Shapes\UserAttributeUpdateSettingsType|null,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL'|null,
     *     DeviceConfiguration?: Shapes\DeviceConfigurationType|null,
     *     EmailConfiguration?: Shapes\EmailConfigurationType|null,
     *     SmsConfiguration?: Shapes\SmsConfigurationType|null,
     *     UserPoolTags?: array<string, string>|null,
     *     AdminCreateUserConfig?: Shapes\AdminCreateUserConfigType|null,
     *     UserPoolAddOns?: Shapes\UserPoolAddOnsType|null,
     *     AccountRecoverySetting?: Shapes\AccountRecoverySettingType|null,
     *     PoolName?: string|null,
     *     UserPoolTier?: 'LITE'|'ESSENTIALS'|'PLUS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
