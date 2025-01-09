<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreTestingSelection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $RestoreTestingPlanName
 * @property Shapes\RestoreTestingSelectionForCreate $RestoreTestingSelection
 */
class CreateRestoreTestingSelectionRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId?: string,
     *     RestoreTestingPlanName: string,
     *     RestoreTestingSelection: Shapes\RestoreTestingSelectionForCreate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
