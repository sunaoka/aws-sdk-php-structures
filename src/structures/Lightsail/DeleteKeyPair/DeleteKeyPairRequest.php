<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyPairName
 * @property string|null $expectedFingerprint
 */
class DeleteKeyPairRequest extends Request
{
    /**
     * @param array{
     *     keyPairName: string,
     *     expectedFingerprint?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
