<?php

namespace Sunaoka\Aws\Structures\Ssm\RemoveTagsFromResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Document'|'ManagedInstance'|'MaintenanceWindow'|'Parameter'|'PatchBaseline'|'OpsItem'|'OpsMetadata'|'Automation'|'Association' $ResourceType
 * @property string $ResourceId
 * @property list<string> $TagKeys
 */
class RemoveTagsFromResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'Document'|'ManagedInstance'|'MaintenanceWindow'|'Parameter'|'PatchBaseline'|'OpsItem'|'OpsMetadata'|'Automation'|'Association',
     *     ResourceId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
