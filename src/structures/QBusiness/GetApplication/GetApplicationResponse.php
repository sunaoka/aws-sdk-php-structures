<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $displayName
 * @property string $applicationId
 * @property string $applicationArn
 * @property 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP' $identityType
 * @property string $iamIdentityProviderArn
 * @property string $identityCenterApplicationArn
 * @property string $roleArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $status
 * @property string $description
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Shapes\ErrorDetail $error
 * @property Shapes\AppliedAttachmentsConfiguration $attachmentsConfiguration
 * @property Shapes\QAppsConfiguration $qAppsConfiguration
 * @property Shapes\PersonalizationConfiguration $personalizationConfiguration
 * @property Shapes\AutoSubscriptionConfiguration $autoSubscriptionConfiguration
 * @property list<string> $clientIdsForOIDC
 * @property Shapes\QuickSightConfiguration $quickSightConfiguration
 */
class GetApplicationResponse extends Response
{
}
