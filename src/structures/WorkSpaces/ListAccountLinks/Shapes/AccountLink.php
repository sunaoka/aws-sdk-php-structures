<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ListAccountLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountLinkId
 * @property 'LINKED'|'LINKING_FAILED'|'LINK_NOT_FOUND'|'PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'|'REJECTED'|null $AccountLinkStatus
 * @property string|null $SourceAccountId
 * @property string|null $TargetAccountId
 */
class AccountLink extends Shape
{
    /**
     * @param array{
     *     AccountLinkId?: string|null,
     *     AccountLinkStatus?: 'LINKED'|'LINKING_FAILED'|'LINK_NOT_FOUND'|'PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'|'REJECTED'|null,
     *     SourceAccountId?: string|null,
     *     TargetAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
