<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaARN
 * @property string $codeHookInterfaceVersion
 */
class LambdaCodeHook extends Shape
{
    /**
     * @param array{
     *     lambdaARN: string,
     *     codeHookInterfaceVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
