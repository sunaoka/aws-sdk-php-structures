<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $TargetAccounts
 * @property int<1, max>|null $UnshareInterval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'|null $UnshareIntervalUnit
 */
class ShareRule extends Shape
{
    /**
     * @param array{
     *     TargetAccounts: list<string>,
     *     UnshareInterval?: int<1, max>|null,
     *     UnshareIntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
