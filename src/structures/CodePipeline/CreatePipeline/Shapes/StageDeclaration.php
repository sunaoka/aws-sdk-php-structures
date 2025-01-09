<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<BlockerDeclaration> $blockers
 * @property list<ActionDeclaration> $actions
 * @property FailureConditions $onFailure
 * @property SuccessConditions $onSuccess
 * @property BeforeEntryConditions $beforeEntry
 */
class StageDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     blockers?: list<BlockerDeclaration>,
     *     actions: list<ActionDeclaration>,
     *     onFailure?: FailureConditions,
     *     onSuccess?: SuccessConditions,
     *     beforeEntry?: BeforeEntryConditions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
