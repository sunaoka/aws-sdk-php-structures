<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property Shapes\UserSettings $DefaultUserSettings
 * @property Shapes\DomainSettingsForUpdate $DomainSettingsForUpdate
 * @property 'Service'|'Customer' $AppSecurityGroupManagement
 * @property Shapes\DefaultSpaceSettings $DefaultSpaceSettings
 * @property list<string> $SubnetIds
 * @property 'PublicInternetOnly'|'VpcOnly' $AppNetworkAccessType
 * @property 'ENABLED'|'DISABLED' $TagPropagation
 */
class UpdateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     DefaultUserSettings?: Shapes\UserSettings,
     *     DomainSettingsForUpdate?: Shapes\DomainSettingsForUpdate,
     *     AppSecurityGroupManagement?: 'Service'|'Customer',
     *     DefaultSpaceSettings?: Shapes\DefaultSpaceSettings,
     *     SubnetIds?: list<string>,
     *     AppNetworkAccessType?: 'PublicInternetOnly'|'VpcOnly',
     *     TagPropagation?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
