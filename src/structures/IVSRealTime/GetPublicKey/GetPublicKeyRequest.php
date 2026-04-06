<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetPublicKeyRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
