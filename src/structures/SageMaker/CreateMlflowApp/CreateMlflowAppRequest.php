<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMlflowApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ArtifactStoreUri
 * @property string $RoleArn
 * @property 'AutoModelRegistrationEnabled'|'AutoModelRegistrationDisabled'|null $ModelRegistrationMode
 * @property string|null $WeeklyMaintenanceWindowStart
 * @property 'ENABLED'|'DISABLED'|null $AccountDefaultStatus
 * @property list<string>|null $DefaultDomainIdList
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMlflowAppRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ArtifactStoreUri: string,
     *     RoleArn: string,
     *     ModelRegistrationMode?: 'AutoModelRegistrationEnabled'|'AutoModelRegistrationDisabled'|null,
     *     WeeklyMaintenanceWindowStart?: string|null,
     *     AccountDefaultStatus?: 'ENABLED'|'DISABLED'|null,
     *     DefaultDomainIdList?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
