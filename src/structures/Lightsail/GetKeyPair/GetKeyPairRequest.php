<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyPairName
 */
class GetKeyPairRequest extends Request
{
    /**
     * @param array{keyPairName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
