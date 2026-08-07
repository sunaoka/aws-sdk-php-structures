<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string|null $name
 * @property Shapes\UpdatedDescription|null $description
 * @property Shapes\UpdatedDiscoveryConfiguration|null $discoveryConfiguration
 * @property Shapes\UpdatedApprovalConfiguration|null $approvalConfiguration
 */
class UpdateRegistryRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     name?: string|null,
     *     description?: Shapes\UpdatedDescription|null,
     *     discoveryConfiguration?: Shapes\UpdatedDiscoveryConfiguration|null,
     *     approvalConfiguration?: Shapes\UpdatedApprovalConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
