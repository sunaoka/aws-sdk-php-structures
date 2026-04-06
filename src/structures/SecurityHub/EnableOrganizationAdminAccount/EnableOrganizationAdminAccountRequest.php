<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdminAccountId
 * @property 'SecurityHub'|'SecurityHubV2'|null $Feature
 */
class EnableOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{
     *     AdminAccountId: string,
     *     Feature?: 'SecurityHub'|'SecurityHubV2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
