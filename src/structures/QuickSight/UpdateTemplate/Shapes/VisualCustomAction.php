<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomActionId
 * @property string $Name
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property 'DATA_POINT_CLICK'|'DATA_POINT_MENU' $Trigger
 * @property list<VisualCustomActionOperation> $ActionOperations
 */
class VisualCustomAction extends Shape
{
    /**
     * @param array{
     *     CustomActionId: string,
     *     Name: string,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     Trigger: 'DATA_POINT_CLICK'|'DATA_POINT_MENU',
     *     ActionOperations: list<VisualCustomActionOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
