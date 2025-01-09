<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 * @property string $roleArn
 * @property 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP' $identityType
 * @property string $iamIdentityProviderArn
 * @property string $identityCenterInstanceArn
 * @property list<string> $clientIdsForOIDC
 * @property string $description
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 * @property list<Shapes\Tag> $tags
 * @property string $clientToken
 * @property Shapes\AttachmentsConfiguration $attachmentsConfiguration
 * @property Shapes\QAppsConfiguration $qAppsConfiguration
 * @property Shapes\PersonalizationConfiguration $personalizationConfiguration
 * @property Shapes\QuickSightConfiguration $quickSightConfiguration
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     displayName: string,
     *     roleArn?: string,
     *     identityType?: 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP',
     *     iamIdentityProviderArn?: string,
     *     identityCenterInstanceArn?: string,
     *     clientIdsForOIDC?: list<string>,
     *     description?: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration,
     *     tags?: list<Shapes\Tag>,
     *     clientToken?: string,
     *     attachmentsConfiguration?: Shapes\AttachmentsConfiguration,
     *     qAppsConfiguration?: Shapes\QAppsConfiguration,
     *     personalizationConfiguration?: Shapes\PersonalizationConfiguration,
     *     quickSightConfiguration?: Shapes\QuickSightConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
