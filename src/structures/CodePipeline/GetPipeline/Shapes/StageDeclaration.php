<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<BlockerDeclaration>|null $blockers
 * @property list<ActionDeclaration> $actions
 */
class StageDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     blockers?: list<BlockerDeclaration>|null,
     *     actions: list<ActionDeclaration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
