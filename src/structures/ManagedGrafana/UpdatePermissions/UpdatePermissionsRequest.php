<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdatePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UpdateInstruction> $updateInstructionBatch
 * @property string $workspaceId
 */
class UpdatePermissionsRequest extends Request
{
    /**
     * @param array{
     *     updateInstructionBatch: list<Shapes\UpdateInstruction>,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
