<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageGroup> $messageGroups
 * @property int $maxRetries
 * @property bool $allowInterrupt
 * @property 'Random'|'Ordered' $messageSelectionStrategy
 * @property array<'Initial'|'Retry1'|'Retry2'|'Retry3'|'Retry4'|'Retry5', PromptAttemptSpecification> $promptAttemptsSpecification
 */
class PromptSpecification extends Shape
{
    /**
     * @param array{
     *     messageGroups: list<MessageGroup>,
     *     maxRetries: int,
     *     allowInterrupt?: bool,
     *     messageSelectionStrategy?: 'Random'|'Ordered',
     *     promptAttemptsSpecification?: array<'Initial'|'Retry1'|'Retry2'|'Retry3'|'Retry4'|'Retry5', PromptAttemptSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
