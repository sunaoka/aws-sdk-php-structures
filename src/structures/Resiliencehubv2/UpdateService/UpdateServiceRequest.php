<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string|null $description
 * @property list<Shapes\AssociatedSystem>|null $associatedSystems
 * @property string|null $policyArn
 * @property list<string>|null $regions
 * @property Shapes\PermissionModel|null $permissionModel
 * @property 'ENABLED'|'DISABLED'|null $dependencyDiscovery
 * @property Shapes\ServiceReportConfiguration|null $reportConfiguration
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     description?: string|null,
     *     associatedSystems?: list<Shapes\AssociatedSystem>|null,
     *     policyArn?: string|null,
     *     regions?: list<string>|null,
     *     permissionModel?: Shapes\PermissionModel|null,
     *     dependencyDiscovery?: 'ENABLED'|'DISABLED'|null,
     *     reportConfiguration?: Shapes\ServiceReportConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
