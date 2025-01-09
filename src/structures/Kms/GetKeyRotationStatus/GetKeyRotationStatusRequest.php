<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyRotationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class GetKeyRotationStatusRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
