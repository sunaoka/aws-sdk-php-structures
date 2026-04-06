<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 * @property string|null $roleArn
 * @property 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP'|'ANONYMOUS'|null $identityType
 * @property string|null $iamIdentityProviderArn
 * @property string|null $identityCenterInstanceArn
 * @property list<string>|null $clientIdsForOIDC
 * @property string|null $description
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 * @property Shapes\AttachmentsConfiguration|null $attachmentsConfiguration
 * @property Shapes\QAppsConfiguration|null $qAppsConfiguration
 * @property Shapes\PersonalizationConfiguration|null $personalizationConfiguration
 * @property Shapes\QuickSightConfiguration|null $quickSightConfiguration
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     displayName: string,
     *     roleArn?: string|null,
     *     identityType?: 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP'|'ANONYMOUS'|null,
     *     iamIdentityProviderArn?: string|null,
     *     identityCenterInstanceArn?: string|null,
     *     clientIdsForOIDC?: list<string>|null,
     *     description?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null,
     *     attachmentsConfiguration?: Shapes\AttachmentsConfiguration|null,
     *     qAppsConfiguration?: Shapes\QAppsConfiguration|null,
     *     personalizationConfiguration?: Shapes\PersonalizationConfiguration|null,
     *     quickSightConfiguration?: Shapes\QuickSightConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
