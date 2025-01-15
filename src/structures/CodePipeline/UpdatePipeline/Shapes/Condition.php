<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROLLBACK'|'FAIL'|'RETRY'|'SKIP'|null $result
 * @property list<RuleDeclaration>|null $rules
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     result?: 'ROLLBACK'|'FAIL'|'RETRY'|'SKIP'|null,
     *     rules?: list<RuleDeclaration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
