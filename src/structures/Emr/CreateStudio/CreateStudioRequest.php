<?php

namespace Sunaoka\Aws\Structures\Emr\CreateStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property 'SSO'|'IAM' $AuthMode
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property string $ServiceRole
 * @property string $UserRole
 * @property string $WorkspaceSecurityGroupId
 * @property string $EngineSecurityGroupId
 * @property string $DefaultS3Location
 * @property string $IdpAuthUrl
 * @property string $IdpRelayStateParameterName
 * @property list<Shapes\Tag> $Tags
 * @property bool $TrustedIdentityPropagationEnabled
 * @property 'REQUIRED'|'OPTIONAL' $IdcUserAssignment
 * @property string $IdcInstanceArn
 * @property string $EncryptionKeyArn
 */
class CreateStudioRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     AuthMode: 'SSO'|'IAM',
     *     VpcId: string,
     *     SubnetIds: list<string>,
     *     ServiceRole: string,
     *     UserRole?: string,
     *     WorkspaceSecurityGroupId: string,
     *     EngineSecurityGroupId: string,
     *     DefaultS3Location: string,
     *     IdpAuthUrl?: string,
     *     IdpRelayStateParameterName?: string,
     *     Tags?: list<Shapes\Tag>,
     *     TrustedIdentityPropagationEnabled?: bool,
     *     IdcUserAssignment?: 'REQUIRED'|'OPTIONAL',
     *     IdcInstanceArn?: string,
     *     EncryptionKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
