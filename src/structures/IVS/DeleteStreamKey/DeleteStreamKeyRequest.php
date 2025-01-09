<?php

namespace Sunaoka\Aws\Structures\IVS\DeleteStreamKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteStreamKeyRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
