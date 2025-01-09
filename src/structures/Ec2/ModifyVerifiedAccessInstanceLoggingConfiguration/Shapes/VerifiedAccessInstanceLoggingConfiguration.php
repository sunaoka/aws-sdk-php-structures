<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VerifiedAccessInstanceId
 * @property VerifiedAccessLogs $AccessLogs
 */
class VerifiedAccessInstanceLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId?: string,
     *     AccessLogs?: VerifiedAccessLogs
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
