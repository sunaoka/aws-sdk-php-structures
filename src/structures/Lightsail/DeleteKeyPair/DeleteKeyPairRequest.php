<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyPairName
 * @property string $expectedFingerprint
 */
class DeleteKeyPairRequest extends Request
{
    /**
     * @param array{
     *     keyPairName: string,
     *     expectedFingerprint?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
