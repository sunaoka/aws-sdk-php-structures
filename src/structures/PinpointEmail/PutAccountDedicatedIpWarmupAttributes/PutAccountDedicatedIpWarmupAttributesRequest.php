<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutAccountDedicatedIpWarmupAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AutoWarmupEnabled
 */
class PutAccountDedicatedIpWarmupAttributesRequest extends Request
{
    /**
     * @param array{AutoWarmupEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
