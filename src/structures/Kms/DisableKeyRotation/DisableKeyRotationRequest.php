<?php

namespace Sunaoka\Aws\Structures\Kms\DisableKeyRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class DisableKeyRotationRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
