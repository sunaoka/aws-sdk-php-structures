<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property list<AwsEc2NetworkInterfaceViolation> $AwsEc2NetworkInterfaceViolations
 */
class AwsEc2InstanceViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     AwsEc2NetworkInterfaceViolations?: list<AwsEc2NetworkInterfaceViolation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
