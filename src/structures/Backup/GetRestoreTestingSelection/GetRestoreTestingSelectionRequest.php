<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingSelection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RestoreTestingPlanName
 * @property string $RestoreTestingSelectionName
 */
class GetRestoreTestingSelectionRequest extends Request
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
