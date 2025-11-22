<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $intentId
 * @property string|null $intentName
 * @property string|null $intentDisplayName
 * @property string|null $description
 * @property string|null $parentIntentSignature
 * @property list<InputContext>|null $inputContexts
 * @property list<OutputContext>|null $outputContexts
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class IntentSummary extends Shape
{
    /**
     * @param array{
     *     intentId?: string|null,
     *     intentName?: string|null,
     *     intentDisplayName?: string|null,
     *     description?: string|null,
     *     parentIntentSignature?: string|null,
     *     inputContexts?: list<InputContext>|null,
     *     outputContexts?: list<OutputContext>|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
