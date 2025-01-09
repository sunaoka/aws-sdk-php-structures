<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'SSO'|'IAM' $AuthMode
 * @property Shapes\UserSettings $DefaultUserSettings
 * @property Shapes\DomainSettings $DomainSettings
 * @property list<string> $SubnetIds
 * @property string $VpcId
 * @property list<Shapes\Tag> $Tags
 * @property 'PublicInternetOnly'|'VpcOnly' $AppNetworkAccessType
 * @property string $HomeEfsFileSystemKmsKeyId
 * @property string $KmsKeyId
 * @property 'Service'|'Customer' $AppSecurityGroupManagement
 * @property 'ENABLED'|'DISABLED' $TagPropagation
 * @property Shapes\DefaultSpaceSettings $DefaultSpaceSettings
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AuthMode: 'SSO'|'IAM',
     *     DefaultUserSettings: Shapes\UserSettings,
     *     DomainSettings?: Shapes\DomainSettings,
     *     SubnetIds: list<string>,
     *     VpcId: string,
     *     Tags?: list<Shapes\Tag>,
     *     AppNetworkAccessType?: 'PublicInternetOnly'|'VpcOnly',
     *     HomeEfsFileSystemKmsKeyId?: string,
     *     KmsKeyId?: string,
     *     AppSecurityGroupManagement?: 'Service'|'Customer',
     *     TagPropagation?: 'ENABLED'|'DISABLED',
     *     DefaultSpaceSettings?: Shapes\DefaultSpaceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
