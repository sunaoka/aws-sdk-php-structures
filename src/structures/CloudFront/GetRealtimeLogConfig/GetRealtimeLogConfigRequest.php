<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetRealtimeLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ARN
 */
class GetRealtimeLogConfigRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
