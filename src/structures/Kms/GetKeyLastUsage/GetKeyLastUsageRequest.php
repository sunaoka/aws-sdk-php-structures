<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyLastUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class GetKeyLastUsageRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
