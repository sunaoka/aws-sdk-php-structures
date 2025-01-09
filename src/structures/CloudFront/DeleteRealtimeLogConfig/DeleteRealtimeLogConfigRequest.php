<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteRealtimeLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ARN
 */
class DeleteRealtimeLogConfigRequest extends Request
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
