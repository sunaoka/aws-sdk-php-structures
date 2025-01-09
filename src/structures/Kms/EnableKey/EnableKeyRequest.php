<?php

namespace Sunaoka\Aws\Structures\Kms\EnableKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class EnableKeyRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
