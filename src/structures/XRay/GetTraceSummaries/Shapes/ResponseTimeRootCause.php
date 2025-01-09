<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResponseTimeRootCauseService> $Services
 * @property bool $ClientImpacting
 */
class ResponseTimeRootCause extends Shape
{
    /**
     * @param array{
     *     Services?: list<ResponseTimeRootCauseService>,
     *     ClientImpacting?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
