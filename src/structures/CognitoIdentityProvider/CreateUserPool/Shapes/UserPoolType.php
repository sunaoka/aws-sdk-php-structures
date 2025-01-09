<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property UserPoolPolicyType $Policies
 * @property 'ACTIVE'|'INACTIVE' $DeletionProtection
 * @property LambdaConfigType $LambdaConfig
 * @property 'Enabled'|'Disabled' $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property list<SchemaAttributeType> $SchemaAttributes
 * @property list<'phone_number'|'email'> $AutoVerifiedAttributes
 * @property list<'phone_number'|'email'|'preferred_username'> $AliasAttributes
 * @property list<'phone_number'|'email'> $UsernameAttributes
 * @property string $SmsVerificationMessage
 * @property string $EmailVerificationMessage
 * @property string $EmailVerificationSubject
 * @property VerificationMessageTemplateType $VerificationMessageTemplate
 * @property string $SmsAuthenticationMessage
 * @property UserAttributeUpdateSettingsType $UserAttributeUpdateSettings
 * @property 'OFF'|'ON'|'OPTIONAL' $MfaConfiguration
 * @property DeviceConfigurationType $DeviceConfiguration
 * @property int $EstimatedNumberOfUsers
 * @property EmailConfigurationType $EmailConfiguration
 * @property SmsConfigurationType $SmsConfiguration
 * @property array<string, string> $UserPoolTags
 * @property string $SmsConfigurationFailure
 * @property string $EmailConfigurationFailure
 * @property string $Domain
 * @property string $CustomDomain
 * @property AdminCreateUserConfigType $AdminCreateUserConfig
 * @property UserPoolAddOnsType $UserPoolAddOns
 * @property UsernameConfigurationType $UsernameConfiguration
 * @property string $Arn
 * @property AccountRecoverySettingType $AccountRecoverySetting
 * @property 'LITE'|'ESSENTIALS'|'PLUS' $UserPoolTier
 */
class UserPoolType extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Policies?: UserPoolPolicyType,
     *     DeletionProtection?: 'ACTIVE'|'INACTIVE',
     *     LambdaConfig?: LambdaConfigType,
     *     Status?: 'Enabled'|'Disabled',
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     SchemaAttributes?: list<SchemaAttributeType>,
     *     AutoVerifiedAttributes?: list<'phone_number'|'email'>,
     *     AliasAttributes?: list<'phone_number'|'email'|'preferred_username'>,
     *     UsernameAttributes?: list<'phone_number'|'email'>,
     *     SmsVerificationMessage?: string,
     *     EmailVerificationMessage?: string,
     *     EmailVerificationSubject?: string,
     *     VerificationMessageTemplate?: VerificationMessageTemplateType,
     *     SmsAuthenticationMessage?: string,
     *     UserAttributeUpdateSettings?: UserAttributeUpdateSettingsType,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL',
     *     DeviceConfiguration?: DeviceConfigurationType,
     *     EstimatedNumberOfUsers?: int,
     *     EmailConfiguration?: EmailConfigurationType,
     *     SmsConfiguration?: SmsConfigurationType,
     *     UserPoolTags?: array<string, string>,
     *     SmsConfigurationFailure?: string,
     *     EmailConfigurationFailure?: string,
     *     Domain?: string,
     *     CustomDomain?: string,
     *     AdminCreateUserConfig?: AdminCreateUserConfigType,
     *     UserPoolAddOns?: UserPoolAddOnsType,
     *     UsernameConfiguration?: UsernameConfigurationType,
     *     Arn?: string,
     *     AccountRecoverySetting?: AccountRecoverySettingType,
     *     UserPoolTier?: 'LITE'|'ESSENTIALS'|'PLUS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
