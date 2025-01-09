<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountDedicatedIpWarmupAttributes;

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
