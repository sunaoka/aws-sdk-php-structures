<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 */
class GetMaintenanceWindowRequest extends Request
{
    /**
     * @param array{WindowId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
