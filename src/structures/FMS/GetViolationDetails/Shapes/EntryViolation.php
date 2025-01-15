<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntryDescription|null $ExpectedEntry
 * @property string|null $ExpectedEvaluationOrder
 * @property string|null $ActualEvaluationOrder
 * @property EntryDescription|null $EntryAtExpectedEvaluationOrder
 * @property list<EntryDescription>|null $EntriesWithConflicts
 * @property list<'MISSING_EXPECTED_ENTRY'|'INCORRECT_ENTRY_ORDER'|'ENTRY_CONFLICT'>|null $EntryViolationReasons
 */
class EntryViolation extends Shape
{
    /**
     * @param array{
     *     ExpectedEntry?: EntryDescription|null,
     *     ExpectedEvaluationOrder?: string|null,
     *     ActualEvaluationOrder?: string|null,
     *     EntryAtExpectedEvaluationOrder?: EntryDescription|null,
     *     EntriesWithConflicts?: list<EntryDescription>|null,
     *     EntryViolationReasons?: list<'MISSING_EXPECTED_ENTRY'|'INCORRECT_ENTRY_ORDER'|'ENTRY_CONFLICT'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
