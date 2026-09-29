<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $CloudwatchLogGroup
 * @property string|null $CloudwatchLogStream
 * @property bool|null $IncludeAuthorizationPolicyContext
 */
class ConnectionLogOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     CloudwatchLogGroup?: string|null,
     *     CloudwatchLogStream?: string|null,
     *     IncludeAuthorizationPolicyContext?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
