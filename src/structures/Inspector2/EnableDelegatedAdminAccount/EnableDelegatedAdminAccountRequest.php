<?php

namespace Sunaoka\Aws\Structures\Inspector2\EnableDelegatedAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $delegatedAdminAccountId
 * @property string|null $clientToken
 */
class EnableDelegatedAdminAccountRequest extends Request
{
    /**
     * @param array{
     *     delegatedAdminAccountId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
