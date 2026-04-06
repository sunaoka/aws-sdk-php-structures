<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Tactic
 * @property string|null $Technique
 * @property string|null $Procedure
 * @property string|null $IpAddress
 * @property string|null $APIName
 * @property int|null $APISuccessCount
 * @property int|null $APIFailureCount
 */
class TTPsObservedDetail extends Shape
{
    /**
     * @param array{
     *     Tactic?: string|null,
     *     Technique?: string|null,
     *     Procedure?: string|null,
     *     IpAddress?: string|null,
     *     APIName?: string|null,
     *     APISuccessCount?: int|null,
     *     APIFailureCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
