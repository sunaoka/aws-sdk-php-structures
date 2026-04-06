<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $targetIdentifiers
 * @property list<string>|null $baselineIdentifiers
 * @property list<string>|null $parentIdentifiers
 * @property list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>|null $statuses
 * @property list<'IN_SYNC'|'DRIFTED'>|null $inheritanceDriftStatuses
 */
class EnabledBaselineFilter extends Shape
{
    /**
     * @param array{
     *     targetIdentifiers?: list<string>|null,
     *     baselineIdentifiers?: list<string>|null,
     *     parentIdentifiers?: list<string>|null,
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>|null,
     *     inheritanceDriftStatuses?: list<'IN_SYNC'|'DRIFTED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
