<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property list<AwsEc2NetworkInterfaceViolation>|null $AwsEc2NetworkInterfaceViolations
 */
class AwsEc2InstanceViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     AwsEc2NetworkInterfaceViolations?: list<AwsEc2NetworkInterfaceViolation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
