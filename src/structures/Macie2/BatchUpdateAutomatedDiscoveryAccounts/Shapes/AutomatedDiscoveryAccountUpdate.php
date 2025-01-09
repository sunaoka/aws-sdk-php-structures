<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchUpdateAutomatedDiscoveryAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ENABLED'|'DISABLED' $status
 */
class AutomatedDiscoveryAccountUpdate extends Shape
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
