<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'SSO'|'IAM' $AuthMode
 * @property Shapes\UserSettings $DefaultUserSettings
 * @property Shapes\DomainSettings|null $DomainSettings
 * @property list<string>|null $SubnetIds
 * @property string|null $VpcId
 * @property list<Shapes\Tag>|null $Tags
 * @property 'PublicInternetOnly'|'VpcOnly'|null $AppNetworkAccessType
 * @property string|null $HomeEfsFileSystemKmsKeyId
 * @property string|null $KmsKeyId
 * @property 'Service'|'Customer'|null $AppSecurityGroupManagement
 * @property 'ENABLED'|'DISABLED'|null $TagPropagation
 * @property Shapes\DefaultSpaceSettings|null $DefaultSpaceSettings
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AuthMode: 'SSO'|'IAM',
     *     DefaultUserSettings: Shapes\UserSettings,
     *     DomainSettings?: Shapes\DomainSettings|null,
     *     SubnetIds?: list<string>|null,
     *     VpcId?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AppNetworkAccessType?: 'PublicInternetOnly'|'VpcOnly'|null,
     *     HomeEfsFileSystemKmsKeyId?: string|null,
     *     KmsKeyId?: string|null,
     *     AppSecurityGroupManagement?: 'Service'|'Customer'|null,
     *     TagPropagation?: 'ENABLED'|'DISABLED'|null,
     *     DefaultSpaceSettings?: Shapes\DefaultSpaceSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
