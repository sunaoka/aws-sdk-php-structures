<?php

namespace Sunaoka\Aws\Structures\Notifications\ListMemberAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notificationConfigurationArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $memberAccount
 * @property 'ACTIVE'|'PENDING'|'INACTIVE'|'CREATING'|'DELETING'|null $status
 * @property string|null $organizationalUnitId
 */
class ListMemberAccountsRequest extends Request
{
    /**
     * @param array{
     *     notificationConfigurationArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     memberAccount?: string|null,
     *     status?: 'ACTIVE'|'PENDING'|'INACTIVE'|'CREATING'|'DELETING'|null,
     *     organizationalUnitId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
