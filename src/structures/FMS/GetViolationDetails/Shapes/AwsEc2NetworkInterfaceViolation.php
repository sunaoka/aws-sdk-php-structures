<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property list<string>|null $ViolatingSecurityGroups
 */
class AwsEc2NetworkInterfaceViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     ViolatingSecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
