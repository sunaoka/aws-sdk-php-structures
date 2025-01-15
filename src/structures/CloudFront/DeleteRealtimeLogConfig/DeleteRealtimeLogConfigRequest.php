<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteRealtimeLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $ARN
 */
class DeleteRealtimeLogConfigRequest extends Request
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
