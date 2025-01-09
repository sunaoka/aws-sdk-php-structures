<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property list<string> $ViolatingSecurityGroups
 */
class AwsEc2NetworkInterfaceViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     ViolatingSecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
