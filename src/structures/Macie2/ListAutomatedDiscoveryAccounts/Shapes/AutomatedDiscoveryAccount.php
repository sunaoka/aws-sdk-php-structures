<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAutomatedDiscoveryAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class AutomatedDiscoveryAccount extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
