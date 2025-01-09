<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdatePublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PublicKeyConfig $PublicKeyConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdatePublicKeyRequest extends Request
{
    /**
     * @param array{
     *     PublicKeyConfig: Shapes\PublicKeyConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
