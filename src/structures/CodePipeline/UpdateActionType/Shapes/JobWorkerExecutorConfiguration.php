<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $pollingAccounts
 * @property list<string>|null $pollingServicePrincipals
 */
class JobWorkerExecutorConfiguration extends Shape
{
    /**
     * @param array{
     *     pollingAccounts?: list<string>|null,
     *     pollingServicePrincipals?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
