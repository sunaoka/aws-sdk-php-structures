<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property 'GPU'|'VCPU'|'MEMORY' $type
 */
class ResourceRequirement extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     type: 'GPU'|'VCPU'|'MEMORY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
