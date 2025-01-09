<?php

namespace Sunaoka\Aws\Structures\IVS\GetPlaybackKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetPlaybackKeyPairRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
