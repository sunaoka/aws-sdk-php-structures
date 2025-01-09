<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BulkDeploymentArn
 * @property string $BulkDeploymentId
 * @property string $CreatedAt
 */
class BulkDeployment extends Shape
{
    /**
     * @param array{
     *     BulkDeploymentArn?: string,
     *     BulkDeploymentId?: string,
     *     CreatedAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
