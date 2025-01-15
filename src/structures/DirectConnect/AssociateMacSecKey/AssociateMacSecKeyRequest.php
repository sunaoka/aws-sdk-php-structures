<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateMacSecKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string|null $secretARN
 * @property string|null $ckn
 * @property string|null $cak
 */
class AssociateMacSecKeyRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     secretARN?: string|null,
     *     ckn?: string|null,
     *     cak?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
