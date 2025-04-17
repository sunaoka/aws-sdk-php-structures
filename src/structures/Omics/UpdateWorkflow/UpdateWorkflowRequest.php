<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $description
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 * @property int<0, 100000>|null $storageCapacity
 */
class UpdateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     description?: string|null,
     *     storageType?: 'STATIC'|'DYNAMIC'|null,
     *     storageCapacity?: int<0, 100000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
