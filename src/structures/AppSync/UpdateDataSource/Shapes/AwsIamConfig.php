<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $signingRegion
 * @property string|null $signingServiceName
 */
class AwsIamConfig extends Shape
{
    /**
     * @param array{
     *     signingRegion?: string|null,
     *     signingServiceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
