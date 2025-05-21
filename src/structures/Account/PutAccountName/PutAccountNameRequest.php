<?php

namespace Sunaoka\Aws\Structures\Account\PutAccountName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property string $AccountName
 */
class PutAccountNameRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     AccountName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
