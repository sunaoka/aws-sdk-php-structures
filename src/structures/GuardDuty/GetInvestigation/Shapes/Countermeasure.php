<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Isolate'|'Evict'|'Restore'|'Harden'|'Detect'|null $DefenseTactic
 * @property list<CountermeasureAction>|null $Actions
 * @property string|null $Description
 */
class Countermeasure extends Shape
{
    /**
     * @param array{
     *     DefenseTactic?: 'Isolate'|'Evict'|'Restore'|'Harden'|'Detect'|null,
     *     Actions?: list<CountermeasureAction>|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
