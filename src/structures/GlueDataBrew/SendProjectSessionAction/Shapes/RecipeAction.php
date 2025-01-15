<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\SendProjectSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Operation
 * @property array<string, string>|null $Parameters
 */
class RecipeAction extends Shape
{
    /**
     * @param array{
     *     Operation: string,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
