<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomActionId
 * @property string $Name
 * @property 'ENABLED'|'DISABLED' $Status
 * @property 'CLICK'|'MENU' $Trigger
 * @property list<ImageCustomActionOperation> $ActionOperations
 */
class ImageCustomAction extends Shape
{
    /**
     * @param array{
     *     CustomActionId: string,
     *     Name: string,
     *     Status?: 'ENABLED'|'DISABLED',
     *     Trigger: 'CLICK'|'MENU',
     *     ActionOperations: list<ImageCustomActionOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
