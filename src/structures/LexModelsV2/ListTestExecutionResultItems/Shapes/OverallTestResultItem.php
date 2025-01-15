<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $multiTurnConversation
 * @property int $totalResultCount
 * @property array<'Matched'|'Mismatched'|'ExecutionError', int>|null $speechTranscriptionResultCounts
 * @property array<'Matched'|'Mismatched'|'ExecutionError', int> $endToEndResultCounts
 */
class OverallTestResultItem extends Shape
{
    /**
     * @param array{
     *     multiTurnConversation: bool,
     *     totalResultCount: int,
     *     speechTranscriptionResultCounts?: array<'Matched'|'Mismatched'|'ExecutionError', int>|null,
     *     endToEndResultCounts: array<'Matched'|'Mismatched'|'ExecutionError', int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
