<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipelineVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Add
 * @property list<string>|null $Remove
 */
class AliasOperations extends Shape
{
    /**
     * @param array{
     *     Add?: list<string>|null,
     *     Remove?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
