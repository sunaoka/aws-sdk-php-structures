<?php

namespace Sunaoka\Aws\Structures\XRay\BatchGetTraces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property double $Duration
 * @property bool $LimitExceeded
 * @property list<Segment> $Segments
 */
class Trace extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Duration?: double,
     *     LimitExceeded?: bool,
     *     Segments?: list<Segment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
