<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FREQUENCY'|null $ProfileType
 * @property 'FREQUENT'|'INFREQUENT'|'UNSEEN'|'RARE'|null $ProfileSubtype
 * @property Observations|null $Observations
 */
class AnomalyObject extends Shape
{
    /**
     * @param array{
     *     ProfileType?: 'FREQUENCY'|null,
     *     ProfileSubtype?: 'FREQUENT'|'INFREQUENT'|'UNSEEN'|'RARE'|null,
     *     Observations?: Observations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
