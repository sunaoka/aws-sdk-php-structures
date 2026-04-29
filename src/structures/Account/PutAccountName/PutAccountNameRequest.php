<?php

namespace Sunaoka\Aws\Structures\Account\PutAccountName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountName
 * @property string|null $AccountId
 */
class PutAccountNameRequest extends Request
{
    /**
     * @param array{
     *     AccountName: string,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
