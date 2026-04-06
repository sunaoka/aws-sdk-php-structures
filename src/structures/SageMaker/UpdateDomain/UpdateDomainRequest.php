<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property Shapes\UserSettings|null $DefaultUserSettings
 * @property Shapes\DomainSettingsForUpdate|null $DomainSettingsForUpdate
 * @property Shapes\DefaultSpaceSettings|null $DefaultSpaceSettings
 * @property 'Service'|'Customer'|null $AppSecurityGroupManagement
 */
class UpdateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     DefaultUserSettings?: Shapes\UserSettings|null,
     *     DomainSettingsForUpdate?: Shapes\DomainSettingsForUpdate|null,
     *     DefaultSpaceSettings?: Shapes\DefaultSpaceSettings|null,
     *     AppSecurityGroupManagement?: 'Service'|'Customer'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
