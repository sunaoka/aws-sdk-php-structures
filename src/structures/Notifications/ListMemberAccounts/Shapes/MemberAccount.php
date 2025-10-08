<?php

namespace Sunaoka\Aws\Structures\Notifications\ListMemberAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $notificationConfigurationArn
 * @property string $accountId
 * @property 'ACTIVE'|'PENDING'|'INACTIVE'|'CREATING'|'DELETING' $status
 * @property string $statusReason
 * @property string $organizationalUnitId
 */
class MemberAccount extends Shape
{
    /**
     * @param array{
     *     notificationConfigurationArn?: string|null,
     *     accountId: string,
     *     status: 'ACTIVE'|'PENDING'|'INACTIVE'|'CREATING'|'DELETING',
     *     statusReason: string,
     *     organizationalUnitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
