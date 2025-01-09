<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Tactic
 * @property string $Technique
 * @property string $Procedure
 * @property string $IpAddress
 * @property string $APIName
 * @property int $APISuccessCount
 * @property int $APIFailureCount
 */
class TTPsObservedDetail extends Shape
{
    /**
     * @param array{
     *     Tactic?: string,
     *     Technique?: string,
     *     Procedure?: string,
     *     IpAddress?: string,
     *     APIName?: string,
     *     APISuccessCount?: int,
     *     APIFailureCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
