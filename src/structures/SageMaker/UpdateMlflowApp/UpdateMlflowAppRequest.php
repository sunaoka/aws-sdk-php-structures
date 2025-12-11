<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMlflowApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property string|null $ArtifactStoreUri
 * @property 'AutoModelRegistrationEnabled'|'AutoModelRegistrationDisabled'|null $ModelRegistrationMode
 * @property string|null $WeeklyMaintenanceWindowStart
 * @property list<string>|null $DefaultDomainIdList
 * @property 'ENABLED'|'DISABLED'|null $AccountDefaultStatus
 */
class UpdateMlflowAppRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     ArtifactStoreUri?: string|null,
     *     ModelRegistrationMode?: 'AutoModelRegistrationEnabled'|'AutoModelRegistrationDisabled'|null,
     *     WeeklyMaintenanceWindowStart?: string|null,
     *     DefaultDomainIdList?: list<string>|null,
     *     AccountDefaultStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
