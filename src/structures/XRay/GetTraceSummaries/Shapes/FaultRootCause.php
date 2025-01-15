<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FaultRootCauseService>|null $Services
 * @property bool|null $ClientImpacting
 */
class FaultRootCause extends Shape
{
    /**
     * @param array{
     *     Services?: list<FaultRootCauseService>|null,
     *     ClientImpacting?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
