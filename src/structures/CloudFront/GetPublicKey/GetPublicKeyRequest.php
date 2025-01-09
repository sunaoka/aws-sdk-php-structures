<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetPublicKeyRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
