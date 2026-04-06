<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, array<string, list<AnomalyObject>>>|null $Profiles
 * @property AnomalyUnusual|null $Unusual
 */
class Anomaly extends Shape
{
    /**
     * @param array{
     *     Profiles?: array<string, array<string, list<AnomalyObject>>>|null,
     *     Unusual?: AnomalyUnusual|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
