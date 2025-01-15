<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetRealtimeLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $ARN
 */
class GetRealtimeLogConfigRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
