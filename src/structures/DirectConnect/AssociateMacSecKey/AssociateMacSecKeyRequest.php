<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateMacSecKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $secretARN
 * @property string $ckn
 * @property string $cak
 */
class AssociateMacSecKeyRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     secretARN?: string,
     *     ckn?: string,
     *     cak?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
