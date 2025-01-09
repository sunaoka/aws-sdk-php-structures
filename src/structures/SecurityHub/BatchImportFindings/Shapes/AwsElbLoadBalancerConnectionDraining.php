<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $Timeout
 */
class AwsElbLoadBalancerConnectionDraining extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     Timeout?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
