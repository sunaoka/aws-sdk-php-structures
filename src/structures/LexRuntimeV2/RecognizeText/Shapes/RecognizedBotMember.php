<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string|null $botName
 */
class RecognizedBotMember extends Shape
{
    /**
     * @param array{
     *     botId: string,
     *     botName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
