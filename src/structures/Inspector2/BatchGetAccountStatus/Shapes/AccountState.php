<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property State $state
 * @property ResourceState $resourceState
 */
class AccountState extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     state: State,
     *     resourceState: ResourceState
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
