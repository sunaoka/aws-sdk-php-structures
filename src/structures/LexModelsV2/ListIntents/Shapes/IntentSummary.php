<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentId
 * @property string $intentName
 * @property string $description
 * @property string $parentIntentSignature
 * @property list<InputContext> $inputContexts
 * @property list<OutputContext> $outputContexts
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class IntentSummary extends Shape
{
    /**
     * @param array{
     *     intentId?: string,
     *     intentName?: string,
     *     description?: string,
     *     parentIntentSignature?: string,
     *     inputContexts?: list<InputContext>,
     *     outputContexts?: list<OutputContext>,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
