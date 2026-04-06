<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botAliasArn
 * @property string $localeId
 */
class LexFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     botAliasArn: string,
     *     localeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
