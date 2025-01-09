<?php

namespace Sunaoka\Aws\Structures\IVS\DeletePlaybackKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeletePlaybackKeyPairRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
