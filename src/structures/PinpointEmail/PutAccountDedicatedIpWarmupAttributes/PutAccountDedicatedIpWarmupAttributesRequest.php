<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutAccountDedicatedIpWarmupAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $AutoWarmupEnabled
 */
class PutAccountDedicatedIpWarmupAttributesRequest extends Request
{
    /**
     * @param array{AutoWarmupEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
