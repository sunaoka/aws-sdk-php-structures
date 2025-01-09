<?php

namespace Sunaoka\Aws\Structures\IVS\BatchGetStreamKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $arns
 */
class BatchGetStreamKeyRequest extends Request
{
    /**
     * @param array{arns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
