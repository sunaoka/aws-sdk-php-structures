<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROLLBACK'|'FAIL'|'RETRY'|'SKIP' $result
 * @property RetryConfiguration $retryConfiguration
 * @property list<Condition> $conditions
 */
class FailureConditions extends Shape
{
    /**
     * @param array{
     *     result?: 'ROLLBACK'|'FAIL'|'RETRY'|'SKIP',
     *     retryConfiguration?: RetryConfiguration,
     *     conditions?: list<Condition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
