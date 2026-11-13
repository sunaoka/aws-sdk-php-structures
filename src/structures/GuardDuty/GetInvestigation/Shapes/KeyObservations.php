<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property string|null $Narrative
 * @property list<string>|null $Observations
 */
class KeyObservations extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     Narrative?: string|null,
     *     Observations?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
