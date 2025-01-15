<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property UserPoolPolicyType|null $Policies
 * @property 'ACTIVE'|'INACTIVE'|null $DeletionProtection
 * @property LambdaConfigType|null $LambdaConfig
 * @property 'Enabled'|'Disabled'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property list<SchemaAttributeType>|null $SchemaAttributes
 * @property list<'phone_number'|'email'>|null $AutoVerifiedAttributes
 * @property list<'phone_number'|'email'|'preferred_username'>|null $AliasAttributes
 * @property list<'phone_number'|'email'>|null $UsernameAttributes
 * @property string|null $SmsVerificationMessage
 * @property string|null $EmailVerificationMessage
 * @property string|null $EmailVerificationSubject
 * @property VerificationMessageTemplateType|null $VerificationMessageTemplate
 * @property string|null $SmsAuthenticationMessage
 * @property UserAttributeUpdateSettingsType|null $UserAttributeUpdateSettings
 * @property 'OFF'|'ON'|'OPTIONAL'|null $MfaConfiguration
 * @property DeviceConfigurationType|null $DeviceConfiguration
 * @property int|null $EstimatedNumberOfUsers
 * @property EmailConfigurationType|null $EmailConfiguration
 * @property SmsConfigurationType|null $SmsConfiguration
 * @property array<string, string>|null $UserPoolTags
 * @property string|null $SmsConfigurationFailure
 * @property string|null $EmailConfigurationFailure
 * @property string|null $Domain
 * @property string|null $CustomDomain
 * @property AdminCreateUserConfigType|null $AdminCreateUserConfig
 * @property UserPoolAddOnsType|null $UserPoolAddOns
 * @property UsernameConfigurationType|null $UsernameConfiguration
 * @property string|null $Arn
 * @property AccountRecoverySettingType|null $AccountRecoverySetting
 * @property 'LITE'|'ESSENTIALS'|'PLUS'|null $UserPoolTier
 */
class UserPoolType extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Policies?: UserPoolPolicyType|null,
     *     DeletionProtection?: 'ACTIVE'|'INACTIVE'|null,
     *     LambdaConfig?: LambdaConfigType|null,
     *     Status?: 'Enabled'|'Disabled'|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     SchemaAttributes?: list<SchemaAttributeType>|null,
     *     AutoVerifiedAttributes?: list<'phone_number'|'email'>|null,
     *     AliasAttributes?: list<'phone_number'|'email'|'preferred_username'>|null,
     *     UsernameAttributes?: list<'phone_number'|'email'>|null,
     *     SmsVerificationMessage?: string|null,
     *     EmailVerificationMessage?: string|null,
     *     EmailVerificationSubject?: string|null,
     *     VerificationMessageTemplate?: VerificationMessageTemplateType|null,
     *     SmsAuthenticationMessage?: string|null,
     *     UserAttributeUpdateSettings?: UserAttributeUpdateSettingsType|null,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL'|null,
     *     DeviceConfiguration?: DeviceConfigurationType|null,
     *     EstimatedNumberOfUsers?: int|null,
     *     EmailConfiguration?: EmailConfigurationType|null,
     *     SmsConfiguration?: SmsConfigurationType|null,
     *     UserPoolTags?: array<string, string>|null,
     *     SmsConfigurationFailure?: string|null,
     *     EmailConfigurationFailure?: string|null,
     *     Domain?: string|null,
     *     CustomDomain?: string|null,
     *     AdminCreateUserConfig?: AdminCreateUserConfigType|null,
     *     UserPoolAddOns?: UserPoolAddOnsType|null,
     *     UsernameConfiguration?: UsernameConfigurationType|null,
     *     Arn?: string|null,
     *     AccountRecoverySetting?: AccountRecoverySettingType|null,
     *     UserPoolTier?: 'LITE'|'ESSENTIALS'|'PLUS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
