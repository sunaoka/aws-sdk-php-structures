<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstancePort
 * @property list<string> $PolicyNames
 */
class AwsElbLoadBalancerBackendServerDescription extends Shape
{
    /**
     * @param array{
     *     InstancePort?: int,
     *     PolicyNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
