<?php

namespace Sunaoka\Aws\Structures\Kms\RotateKeyOnDemand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class RotateKeyOnDemandRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
