<?php

namespace Sunaoka\Aws\Structures\Account\StartPrimaryEmailUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $PrimaryEmail
 */
class StartPrimaryEmailUpdateRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PrimaryEmail: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
