<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $TargetAccounts
 * @property int<1, max> $UnshareInterval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $UnshareIntervalUnit
 */
class ShareRule extends Shape
{
    /**
     * @param array{
     *     TargetAccounts: list<string>,
     *     UnshareInterval?: int<1, max>,
     *     UnshareIntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
