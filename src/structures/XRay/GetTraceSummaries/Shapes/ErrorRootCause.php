<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ErrorRootCauseService> $Services
 * @property bool $ClientImpacting
 */
class ErrorRootCause extends Shape
{
    /**
     * @param array{
     *     Services?: list<ErrorRootCauseService>,
     *     ClientImpacting?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
