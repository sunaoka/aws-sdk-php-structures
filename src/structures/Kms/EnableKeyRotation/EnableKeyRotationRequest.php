<?php

namespace Sunaoka\Aws\Structures\Kms\EnableKeyRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class EnableKeyRotationRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
