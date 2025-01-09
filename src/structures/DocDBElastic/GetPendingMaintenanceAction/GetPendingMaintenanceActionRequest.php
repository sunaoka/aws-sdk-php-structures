<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\GetPendingMaintenanceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 */
class GetPendingMaintenanceActionRequest extends Request
{
    /**
     * @param array{resourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
