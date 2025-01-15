<?php

namespace Sunaoka\Aws\Structures\XRay\BatchGetTraces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property double|null $Duration
 * @property bool|null $LimitExceeded
 * @property list<Segment>|null $Segments
 */
class Trace extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Duration?: double|null,
     *     LimitExceeded?: bool|null,
     *     Segments?: list<Segment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
