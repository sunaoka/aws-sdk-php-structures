<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalResultCount
 * @property array<'Matched'|'Mismatched'|'ExecutionError', int>|null $speechTranscriptionResultCounts
 * @property array<'Matched'|'Mismatched'|'ExecutionError', int> $intentMatchResultCounts
 */
class IntentClassificationTestResultItemCounts extends Shape
{
    /**
     * @param array{
     *     totalResultCount: int,
     *     speechTranscriptionResultCounts?: array<'Matched'|'Mismatched'|'ExecutionError', int>|null,
     *     intentMatchResultCounts: array<'Matched'|'Mismatched'|'ExecutionError', int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
