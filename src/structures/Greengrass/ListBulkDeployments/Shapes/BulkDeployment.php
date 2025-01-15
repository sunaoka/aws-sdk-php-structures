<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BulkDeploymentArn
 * @property string|null $BulkDeploymentId
 * @property string|null $CreatedAt
 */
class BulkDeployment extends Shape
{
    /**
     * @param array{
     *     BulkDeploymentArn?: string|null,
     *     BulkDeploymentId?: string|null,
     *     CreatedAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
