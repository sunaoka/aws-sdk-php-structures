<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountDedicatedIpWarmupAttributes;

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
