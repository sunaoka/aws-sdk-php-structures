<?php

namespace Sunaoka\Aws\Structures\Greengrass\StopBulkDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BulkDeploymentId
 */
class StopBulkDeploymentRequest extends Request
{
    /**
     * @param array{BulkDeploymentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
