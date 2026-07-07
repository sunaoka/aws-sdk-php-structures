<?php

namespace Sunaoka\Aws\Structures\Ssm\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Document'|'ManagedInstance'|'MaintenanceWindow'|'Parameter'|'PatchBaseline'|'OpsItem'|'OpsMetadata'|'Automation'|'Association'|'CloudConnector' $ResourceType
 * @property string $ResourceId
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'Document'|'ManagedInstance'|'MaintenanceWindow'|'Parameter'|'PatchBaseline'|'OpsItem'|'OpsMetadata'|'Automation'|'Association'|'CloudConnector',
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
