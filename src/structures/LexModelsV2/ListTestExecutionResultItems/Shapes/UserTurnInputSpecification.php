<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UtteranceInputSpecification $utteranceInput
 * @property array<string, string>|null $requestAttributes
 * @property InputSessionStateSpecification|null $sessionState
 */
class UserTurnInputSpecification extends Shape
{
    /**
     * @param array{
     *     utteranceInput: UtteranceInputSpecification,
     *     requestAttributes?: array<string, string>|null,
     *     sessionState?: InputSessionStateSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
