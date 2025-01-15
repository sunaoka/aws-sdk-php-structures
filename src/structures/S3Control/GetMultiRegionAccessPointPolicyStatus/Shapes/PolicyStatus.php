<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointPolicyStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsPublic
 */
class PolicyStatus extends Shape
{
    /**
     * @param array{IsPublic?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
