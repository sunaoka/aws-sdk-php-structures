<?php

namespace Sunaoka\Aws\Structures\Ssm\AddTagsToResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Document'|'ManagedInstance'|'MaintenanceWindow'|'Parameter'|'PatchBaseline'|'OpsItem'|'OpsMetadata'|'Automation'|'Association' $ResourceType
 * @property string $ResourceId
 * @property list<Shapes\Tag> $Tags
 */
class AddTagsToResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'Document'|'ManagedInstance'|'MaintenanceWindow'|'Parameter'|'PatchBaseline'|'OpsItem'|'OpsMetadata'|'Automation'|'Association',
     *     ResourceId: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
