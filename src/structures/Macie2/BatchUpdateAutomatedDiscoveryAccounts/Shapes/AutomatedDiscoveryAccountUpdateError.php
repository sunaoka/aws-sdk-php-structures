<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchUpdateAutomatedDiscoveryAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ACCOUNT_PAUSED'|'ACCOUNT_NOT_FOUND' $errorCode
 */
class AutomatedDiscoveryAccountUpdateError extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     errorCode?: 'ACCOUNT_PAUSED'|'ACCOUNT_NOT_FOUND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
