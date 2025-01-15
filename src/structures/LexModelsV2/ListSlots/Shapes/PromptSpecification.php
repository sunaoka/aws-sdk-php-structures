<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageGroup> $messageGroups
 * @property int<0, 5> $maxRetries
 * @property bool|null $allowInterrupt
 * @property 'Random'|'Ordered'|null $messageSelectionStrategy
 * @property array<'Initial'|'Retry1'|'Retry2'|'Retry3'|'Retry4'|'Retry5', PromptAttemptSpecification>|null $promptAttemptsSpecification
 */
class PromptSpecification extends Shape
{
    /**
     * @param array{
     *     messageGroups: list<MessageGroup>,
     *     maxRetries: int<0, 5>,
     *     allowInterrupt?: bool|null,
     *     messageSelectionStrategy?: 'Random'|'Ordered'|null,
     *     promptAttemptsSpecification?: array<'Initial'|'Retry1'|'Retry2'|'Retry3'|'Retry4'|'Retry5', PromptAttemptSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
