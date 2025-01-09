<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UtteranceInputSpecification $utteranceInput
 * @property array<string, string> $requestAttributes
 * @property InputSessionStateSpecification $sessionState
 */
class UserTurnInputSpecification extends Shape
{
    /**
     * @param array{
     *     utteranceInput: UtteranceInputSpecification,
     *     requestAttributes?: array<string, string>,
     *     sessionState?: InputSessionStateSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
