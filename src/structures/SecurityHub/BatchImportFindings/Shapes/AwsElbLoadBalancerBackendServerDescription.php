<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstancePort
 * @property list<string>|null $PolicyNames
 */
class AwsElbLoadBalancerBackendServerDescription extends Shape
{
    /**
     * @param array{
     *     InstancePort?: int|null,
     *     PolicyNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
