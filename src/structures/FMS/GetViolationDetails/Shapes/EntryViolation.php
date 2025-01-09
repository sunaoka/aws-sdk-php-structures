<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntryDescription $ExpectedEntry
 * @property string $ExpectedEvaluationOrder
 * @property string $ActualEvaluationOrder
 * @property EntryDescription $EntryAtExpectedEvaluationOrder
 * @property list<EntryDescription> $EntriesWithConflicts
 * @property list<'MISSING_EXPECTED_ENTRY'|'INCORRECT_ENTRY_ORDER'|'ENTRY_CONFLICT'> $EntryViolationReasons
 */
class EntryViolation extends Shape
{
    /**
     * @param array{
     *     ExpectedEntry?: EntryDescription,
     *     ExpectedEvaluationOrder?: string,
     *     ActualEvaluationOrder?: string,
     *     EntryAtExpectedEvaluationOrder?: EntryDescription,
     *     EntriesWithConflicts?: list<EntryDescription>,
     *     EntryViolationReasons?: list<'MISSING_EXPECTED_ENTRY'|'INCORRECT_ENTRY_ORDER'|'ENTRY_CONFLICT'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
