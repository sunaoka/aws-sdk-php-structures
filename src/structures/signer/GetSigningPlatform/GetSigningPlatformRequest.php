<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningPlatform;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $platformId
 */
class GetSigningPlatformRequest extends Request
{
    /**
     * @param array{platformId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
