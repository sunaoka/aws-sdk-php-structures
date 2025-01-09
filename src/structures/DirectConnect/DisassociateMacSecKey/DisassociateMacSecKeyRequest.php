<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DisassociateMacSecKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $secretARN
 */
class DisassociateMacSecKeyRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     secretARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
