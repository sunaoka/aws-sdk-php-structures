<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FREQUENCY'|'VOLUME'|null $ProfileType
 * @property 'FREQUENT'|'INFREQUENT'|'UNSEEN'|'RARE'|'COUNT'|'AVERAGE'|null $ProfileSubtype
 * @property Observations|null $Observations
 */
class AnomalyObject extends Shape
{
    /**
     * @param array{
     *     ProfileType?: 'FREQUENCY'|'VOLUME'|null,
     *     ProfileSubtype?: 'FREQUENT'|'INFREQUENT'|'UNSEEN'|'RARE'|'COUNT'|'AVERAGE'|null,
     *     Observations?: Observations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
