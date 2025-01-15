<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchUpdateAutomatedDiscoveryAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'ACCOUNT_PAUSED'|'ACCOUNT_NOT_FOUND'|null $errorCode
 */
class AutomatedDiscoveryAccountUpdateError extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     errorCode?: 'ACCOUNT_PAUSED'|'ACCOUNT_NOT_FOUND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
