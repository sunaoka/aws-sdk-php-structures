<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $pollingAccounts
 * @property list<string> $pollingServicePrincipals
 */
class JobWorkerExecutorConfiguration extends Shape
{
    /**
     * @param array{
     *     pollingAccounts?: list<string>,
     *     pollingServicePrincipals?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
