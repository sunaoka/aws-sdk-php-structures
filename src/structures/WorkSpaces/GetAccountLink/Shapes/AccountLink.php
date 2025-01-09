<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\GetAccountLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountLinkId
 * @property 'LINKED'|'LINKING_FAILED'|'LINK_NOT_FOUND'|'PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'|'REJECTED' $AccountLinkStatus
 * @property string $SourceAccountId
 * @property string $TargetAccountId
 */
class AccountLink extends Shape
{
    /**
     * @param array{
     *     AccountLinkId?: string,
     *     AccountLinkStatus?: 'LINKED'|'LINKING_FAILED'|'LINK_NOT_FOUND'|'PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'|'REJECTED',
     *     SourceAccountId?: string,
     *     TargetAccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
