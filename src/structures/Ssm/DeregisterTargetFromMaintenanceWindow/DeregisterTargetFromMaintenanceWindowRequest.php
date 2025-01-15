<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterTargetFromMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string $WindowTargetId
 * @property bool|null $Safe
 */
class DeregisterTargetFromMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     WindowTargetId: string,
     *     Safe?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
