<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreatePublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PublicKeyConfig $PublicKeyConfig
 */
class CreatePublicKeyRequest extends Request
{
    /**
     * @param array{PublicKeyConfig: Shapes\PublicKeyConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
