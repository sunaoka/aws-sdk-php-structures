<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FaultRootCauseService> $Services
 * @property bool $ClientImpacting
 */
class FaultRootCause extends Shape
{
    /**
     * @param array{
     *     Services?: list<FaultRootCauseService>,
     *     ClientImpacting?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
