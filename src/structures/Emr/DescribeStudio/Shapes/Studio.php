<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StudioId
 * @property string|null $StudioArn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'SSO'|'IAM'|null $AuthMode
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property string|null $ServiceRole
 * @property string|null $UserRole
 * @property string|null $WorkspaceSecurityGroupId
 * @property string|null $EngineSecurityGroupId
 * @property string|null $Url
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $DefaultS3Location
 * @property string|null $IdpAuthUrl
 * @property string|null $IdpRelayStateParameterName
 * @property list<Tag>|null $Tags
 * @property string|null $IdcInstanceArn
 * @property bool|null $TrustedIdentityPropagationEnabled
 * @property 'REQUIRED'|'OPTIONAL'|null $IdcUserAssignment
 * @property string|null $EncryptionKeyArn
 */
class Studio extends Shape
{
    /**
     * @param array{
     *     StudioId?: string|null,
     *     StudioArn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     AuthMode?: 'SSO'|'IAM'|null,
     *     VpcId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     ServiceRole?: string|null,
     *     UserRole?: string|null,
     *     WorkspaceSecurityGroupId?: string|null,
     *     EngineSecurityGroupId?: string|null,
     *     Url?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     DefaultS3Location?: string|null,
     *     IdpAuthUrl?: string|null,
     *     IdpRelayStateParameterName?: string|null,
     *     Tags?: list<Tag>|null,
     *     IdcInstanceArn?: string|null,
     *     TrustedIdentityPropagationEnabled?: bool|null,
     *     IdcUserAssignment?: 'REQUIRED'|'OPTIONAL'|null,
     *     EncryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
