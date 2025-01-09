<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROLLBACK'|'FAIL'|'RETRY'|'SKIP' $result
 * @property list<RuleDeclaration> $rules
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     result?: 'ROLLBACK'|'FAIL'|'RETRY'|'SKIP',
     *     rules?: list<RuleDeclaration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
