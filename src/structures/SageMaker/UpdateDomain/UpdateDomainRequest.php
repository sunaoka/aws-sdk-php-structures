<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property Shapes\UserSettings|null $DefaultUserSettings
 * @property Shapes\DomainSettingsForUpdate|null $DomainSettingsForUpdate
 * @property 'Service'|'Customer'|null $AppSecurityGroupManagement
 * @property Shapes\DefaultSpaceSettings|null $DefaultSpaceSettings
 * @property list<string>|null $SubnetIds
 * @property 'PublicInternetOnly'|'VpcOnly'|null $AppNetworkAccessType
 * @property 'ENABLED'|'DISABLED'|null $TagPropagation
 */
class UpdateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     DefaultUserSettings?: Shapes\UserSettings|null,
     *     DomainSettingsForUpdate?: Shapes\DomainSettingsForUpdate|null,
     *     AppSecurityGroupManagement?: 'Service'|'Customer'|null,
     *     DefaultSpaceSettings?: Shapes\DefaultSpaceSettings|null,
     *     SubnetIds?: list<string>|null,
     *     AppNetworkAccessType?: 'PublicInternetOnly'|'VpcOnly'|null,
     *     TagPropagation?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
