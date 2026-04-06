<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingSelection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RestoreTestingPlanName
 * @property Shapes\RestoreTestingSelectionForUpdate $RestoreTestingSelection
 * @property string $RestoreTestingSelectionName
 */
class UpdateRestoreTestingSelectionRequest extends Request
{
    /**
     * @param array{
     *     RestoreTestingPlanName: string,
     *     RestoreTestingSelection: Shapes\RestoreTestingSelectionForUpdate,
     *     RestoreTestingSelectionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
