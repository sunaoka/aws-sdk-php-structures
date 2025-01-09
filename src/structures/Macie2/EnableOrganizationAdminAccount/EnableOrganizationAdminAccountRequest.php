<?php

namespace Sunaoka\Aws\Structures\Macie2\EnableOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminAccountId
 * @property string $clientToken
 */
class EnableOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{
     *     adminAccountId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
