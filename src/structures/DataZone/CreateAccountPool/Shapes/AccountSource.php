<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAccountPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AccountInfo>|null $accounts
 * @property CustomAccountPoolHandler|null $customAccountPoolHandler
 */
class AccountSource extends Shape
{
    /**
     * @param array{
     *     accounts?: list<AccountInfo>|null,
     *     customAccountPoolHandler?: CustomAccountPoolHandler|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
