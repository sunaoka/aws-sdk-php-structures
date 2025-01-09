<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAutomatedDiscoveryAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ENABLED'|'DISABLED' $status
 */
class AutomatedDiscoveryAccount extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
