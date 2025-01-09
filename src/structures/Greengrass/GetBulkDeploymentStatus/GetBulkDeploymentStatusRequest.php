<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetBulkDeploymentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BulkDeploymentId
 */
class GetBulkDeploymentStatusRequest extends Request
{
    /**
     * @param array{BulkDeploymentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
