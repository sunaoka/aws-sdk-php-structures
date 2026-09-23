<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountIds
 * @property list<string>|null $organizationalUnits
 */
class AccountSet extends Shape
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     organizationalUnits?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
