<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 * @property double $BaseScore
 * @property string $BaseVector
 * @property string $Source
 * @property list<Adjustment> $Adjustments
 */
class Cvss extends Shape
{
    /**
     * @param array{
     *     Version?: string,
     *     BaseScore?: double,
     *     BaseVector?: string,
     *     Source?: string,
     *     Adjustments?: list<Adjustment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
