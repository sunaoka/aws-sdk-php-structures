<?php

namespace Sunaoka\Aws\Structures\drs\ListStagingAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountID
 */
class Account extends Shape
{
    /**
     * @param array{accountID?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
