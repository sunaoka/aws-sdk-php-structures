<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD_8GB'|'LARGE_16GB'|'XLARGE_72GB' $buildComputeType
 */
class JobConfig extends Shape
{
    /**
     * @param array{buildComputeType: 'STANDARD_8GB'|'LARGE_16GB'|'XLARGE_72GB'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
