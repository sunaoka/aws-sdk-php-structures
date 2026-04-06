<?php

namespace Sunaoka\Aws\Structures\Emr\CreateStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'SSO'|'IAM' $AuthMode
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property string $ServiceRole
 * @property string|null $UserRole
 * @property string $WorkspaceSecurityGroupId
 * @property string $EngineSecurityGroupId
 * @property string $DefaultS3Location
 * @property string|null $IdpAuthUrl
 * @property string|null $IdpRelayStateParameterName
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateStudioRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     AuthMode: 'SSO'|'IAM',
     *     VpcId: string,
     *     SubnetIds: list<string>,
     *     ServiceRole: string,
     *     UserRole?: string|null,
     *     WorkspaceSecurityGroupId: string,
     *     EngineSecurityGroupId: string,
     *     DefaultS3Location: string,
     *     IdpAuthUrl?: string|null,
     *     IdpRelayStateParameterName?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
