<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ErrorRootCauseService>|null $Services
 * @property bool|null $ClientImpacting
 */
class ErrorRootCause extends Shape
{
    /**
     * @param array{
     *     Services?: list<ErrorRootCauseService>|null,
     *     ClientImpacting?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
