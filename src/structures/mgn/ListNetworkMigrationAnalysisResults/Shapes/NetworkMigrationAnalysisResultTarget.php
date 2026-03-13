<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationAnalysisResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vpcID
 * @property string|null $subnetID
 */
class NetworkMigrationAnalysisResultTarget extends Shape
{
    /**
     * @param array{
     *     vpcID?: string|null,
     *     subnetID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
