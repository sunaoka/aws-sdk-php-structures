<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROLLBACK'|'FAIL'|null $result
 * @property list<Condition>|null $conditions
 */
class FailureConditions extends Shape
{
    /**
     * @param array{
     *     result?: 'ROLLBACK'|'FAIL'|null,
     *     conditions?: list<Condition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
