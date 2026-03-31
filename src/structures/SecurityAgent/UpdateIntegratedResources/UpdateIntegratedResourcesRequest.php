<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $integrationId
 * @property list<Shapes\IntegratedResourceInputItem> $items
 */
class UpdateIntegratedResourcesRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     integrationId: string,
     *     items: list<Shapes\IntegratedResourceInputItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
