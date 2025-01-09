<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FREQUENCY' $ProfileType
 * @property 'FREQUENT'|'INFREQUENT'|'UNSEEN'|'RARE' $ProfileSubtype
 * @property Observations $Observations
 */
class AnomalyObject extends Shape
{
    /**
     * @param array{
     *     ProfileType?: 'FREQUENCY',
     *     ProfileSubtype?: 'FREQUENT'|'INFREQUENT'|'UNSEEN'|'RARE',
     *     Observations?: Observations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
