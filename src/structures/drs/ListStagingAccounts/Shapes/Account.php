<?php

namespace Sunaoka\Aws\Structures\drs\ListStagingAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountID
 */
class Account extends Shape
{
    /**
     * @param array{accountID?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
