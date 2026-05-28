<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\AssociatedSystem>|null $associatedSystems
 * @property string|null $policyArn
 * @property list<string> $regions
 * @property Shapes\PermissionModel $permissionModel
 * @property 'ENABLED'|'DISABLED'|null $dependencyDiscovery
 * @property Shapes\ServiceReportConfiguration|null $reportConfiguration
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     associatedSystems?: list<Shapes\AssociatedSystem>|null,
     *     policyArn?: string|null,
     *     regions: list<string>,
     *     permissionModel: Shapes\PermissionModel,
     *     dependencyDiscovery?: 'ENABLED'|'DISABLED'|null,
     *     reportConfiguration?: Shapes\ServiceReportConfiguration|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
