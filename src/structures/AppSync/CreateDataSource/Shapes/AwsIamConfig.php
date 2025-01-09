<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $signingRegion
 * @property string $signingServiceName
 */
class AwsIamConfig extends Shape
{
    /**
     * @param array{
     *     signingRegion?: string,
     *     signingServiceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
