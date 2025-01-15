<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VerifiedAccessInstanceId
 * @property VerifiedAccessLogs|null $AccessLogs
 */
class VerifiedAccessInstanceLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId?: string|null,
     *     AccessLogs?: VerifiedAccessLogs|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
