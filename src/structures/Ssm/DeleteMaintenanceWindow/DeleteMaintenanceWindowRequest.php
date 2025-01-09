<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 */
class DeleteMaintenanceWindowRequest extends Request
{
    /**
     * @param array{WindowId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
