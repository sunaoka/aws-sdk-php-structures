<?php

namespace Sunaoka\Aws\Structures\Detective\CreateMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $EmailAddress
 */
class Account extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     EmailAddress: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
