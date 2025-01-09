<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property ResourceState $resourceState
 * @property State $state
 */
class AccountState extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     resourceState: ResourceState,
     *     state: State
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
