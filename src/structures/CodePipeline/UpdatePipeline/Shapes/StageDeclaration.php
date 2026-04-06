<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<BlockerDeclaration>|null $blockers
 * @property list<ActionDeclaration> $actions
 * @property FailureConditions|null $onFailure
 * @property SuccessConditions|null $onSuccess
 * @property BeforeEntryConditions|null $beforeEntry
 */
class StageDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     blockers?: list<BlockerDeclaration>|null,
     *     actions: list<ActionDeclaration>,
     *     onFailure?: FailureConditions|null,
     *     onSuccess?: SuccessConditions|null,
     *     beforeEntry?: BeforeEntryConditions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
