<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudExadataInfrastructureUnallocatedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 * @property list<string>|null $dbServers
 */
class GetCloudExadataInfrastructureUnallocatedResourcesRequest extends Request
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     dbServers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
