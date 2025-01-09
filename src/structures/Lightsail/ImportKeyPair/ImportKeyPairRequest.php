<?php

namespace Sunaoka\Aws\Structures\Lightsail\ImportKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyPairName
 * @property string $publicKeyBase64
 */
class ImportKeyPairRequest extends Request
{
    /**
     * @param array{
     *     keyPairName: string,
     *     publicKeyBase64: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
