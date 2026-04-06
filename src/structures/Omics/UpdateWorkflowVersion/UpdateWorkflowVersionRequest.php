<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateWorkflowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $versionName
 * @property string|null $description
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 * @property int<0, 100000>|null $storageCapacity
 * @property string|null $readmeMarkdown
 */
class UpdateWorkflowVersionRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     versionName: string,
     *     description?: string|null,
     *     storageType?: 'STATIC'|'DYNAMIC'|null,
     *     storageCapacity?: int<0, 100000>|null,
     *     readmeMarkdown?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
