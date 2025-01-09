<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StudioId
 * @property string $StudioArn
 * @property string $Name
 * @property string $Description
 * @property 'SSO'|'IAM' $AuthMode
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property string $ServiceRole
 * @property string $UserRole
 * @property string $WorkspaceSecurityGroupId
 * @property string $EngineSecurityGroupId
 * @property string $Url
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $DefaultS3Location
 * @property string $IdpAuthUrl
 * @property string $IdpRelayStateParameterName
 * @property list<Tag> $Tags
 * @property string $IdcInstanceArn
 * @property bool $TrustedIdentityPropagationEnabled
 * @property 'REQUIRED'|'OPTIONAL' $IdcUserAssignment
 * @property string $EncryptionKeyArn
 */
class Studio extends Shape
{
    /**
     * @param array{
     *     StudioId?: string,
     *     StudioArn?: string,
     *     Name?: string,
     *     Description?: string,
     *     AuthMode?: 'SSO'|'IAM',
     *     VpcId?: string,
     *     SubnetIds?: list<string>,
     *     ServiceRole?: string,
     *     UserRole?: string,
     *     WorkspaceSecurityGroupId?: string,
     *     EngineSecurityGroupId?: string,
     *     Url?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     DefaultS3Location?: string,
     *     IdpAuthUrl?: string,
     *     IdpRelayStateParameterName?: string,
     *     Tags?: list<Tag>,
     *     IdcInstanceArn?: string,
     *     TrustedIdentityPropagationEnabled?: bool,
     *     IdcUserAssignment?: 'REQUIRED'|'OPTIONAL',
     *     EncryptionKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
