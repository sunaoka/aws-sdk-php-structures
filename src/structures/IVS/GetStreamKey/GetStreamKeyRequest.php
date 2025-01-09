<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetStreamKeyRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
