<?php

namespace Sunaoka\Aws\Structures\Inspector2\EnableDelegatedAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $delegatedAdminAccountId
 */
class EnableDelegatedAdminAccountRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     delegatedAdminAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
