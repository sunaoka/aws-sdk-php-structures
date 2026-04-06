<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteRestoreTestingSelection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RestoreTestingPlanName
 * @property string $RestoreTestingSelectionName
 */
class DeleteRestoreTestingSelectionRequest extends Request
{
    /**
     * @param array{
     *     RestoreTestingPlanName: string,
     *     RestoreTestingSelectionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
