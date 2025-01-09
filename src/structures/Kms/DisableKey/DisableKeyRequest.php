<?php

namespace Sunaoka\Aws\Structures\Kms\DisableKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class DisableKeyRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
