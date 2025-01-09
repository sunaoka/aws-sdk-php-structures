<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaCodeHook $lambdaCodeHook
 */
class CodeHookSpecification extends Shape
{
    /**
     * @param array{lambdaCodeHook: LambdaCodeHook} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
