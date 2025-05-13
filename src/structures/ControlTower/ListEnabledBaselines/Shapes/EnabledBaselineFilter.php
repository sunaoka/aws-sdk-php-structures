<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $baselineIdentifiers
 * @property list<'IN_SYNC'|'DRIFTED'>|null $inheritanceDriftStatuses
 * @property list<string>|null $parentIdentifiers
 * @property list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>|null $statuses
 * @property list<string>|null $targetIdentifiers
 */
class EnabledBaselineFilter extends Shape
{
    /**
     * @param array{
     *     baselineIdentifiers?: list<string>|null,
     *     inheritanceDriftStatuses?: list<'IN_SYNC'|'DRIFTED'>|null,
     *     parentIdentifiers?: list<string>|null,
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>|null,
     *     targetIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
