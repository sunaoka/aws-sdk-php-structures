<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROLLBACK'|'FAIL'|'RETRY'|'SKIP'|null $result
 * @property RetryConfiguration|null $retryConfiguration
 * @property list<Condition>|null $conditions
 */
class FailureConditions extends Shape
{
    /**
     * @param array{
     *     result?: 'ROLLBACK'|'FAIL'|'RETRY'|'SKIP'|null,
     *     retryConfiguration?: RetryConfiguration|null,
     *     conditions?: list<Condition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
